<?php

function uploadFileData(array $files)
{
    $returnData = array(
        'fileIds' => array(),
        'fileData' => array(),
    );

    if(empty($files['tmp_name']))
        return $returnData;

    //one file
    if(!is_array($files['tmp_name']))
    {
        $fileId = \CFile::SaveFile($files);
        if($fileId)
        {
            $returnData['fileIds'] = $fileId;
            $returnData['fileData'] = \CFile::MakeFileArray($fileId);
        }

        return $returnData;
    }

    //multiple files
    $pushData = array_flip(array_keys($files));
    for($i = 0, $cnt = count($files['tmp_name']); $i < $cnt; ++$i)
    {
        foreach($pushData as $key => $v)
            $pushData[$key] = $files[$key][$i];
        $fileId = \CFile::SaveFile($pushData);
        if($fileId)
        {
            $returnData['fileIds'][] = $fileId;
            $returnData['fileData'][] = \CFile::MakeFileArray($fileId);
        }
    }

    return $returnData;
}