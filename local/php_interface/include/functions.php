<?php

function uploadFileData(array $files, $maxCount = null)
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

    //max count of uploaded files
    $cnt = count($files['tmp_name']);
    if(isset($maxCount))
    {
        if($maxCount < count($files['tmp_name']))
            $cnt = $maxCount;
    }

    for($i = 0; $i < $cnt; ++$i)
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