<?php

namespace DEPTRAC_202312;

/**
 * @since 8.1
 */
class CURLStringFile
{
    public string $data;
    public string $mime;
    public string $postname;
    public function __construct(string $data, string $postname, string $mime = 'application/octet-stream')
    {
    }
}
/**
 * @since 8.1
 */
\class_alias('DEPTRAC_202312\\CURLStringFile', 'CURLStringFile', \false);
