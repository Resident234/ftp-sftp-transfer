<?php
/**
 * Interface for backend types
 *
 * @author Tuomas Angervuori <tuomas.angervuori@gmail.com>
 * @license http://opensource.org/licenses/LGPL-3.0 LGPL v3
 */

namespace FileTransfer\Protocol;

interface TransferProtocol
{

    /**
     * Establish a connection
     */
    public function __construct($url, array $options = null);

    /**
     * Change directory
     */
    public function cd($directory);

    /**
     * Print working directory
     */
    public function pwd();

    /**
     * Download a file
     */
    public function download($remoteFile);

    /**
     * Upload a file
     */
    public function upload($data, $remoteFile);

    /**
     * List current directory
     */
    public function ls();

    /**
     * File or directory exists
     */
    public function exists($path);

    /**
     * Delete a file from remote server
     */
    public function rm($remoteFile);

    /**
     * Rename file in remote server
     */
    public function mv($remoteFile, $newName);

    /**
     * Create a directory in remote server
     */
    public function mkdir($dirName);

    /**
     * Remove a directory from remote server
     */
    public function rmdir($dirName);

    /**
     * Close connection
     */
    public function close();

    /**
     * Execute arbitrary command
     *
     * @param $command
     */
    public function exec($command);

    /**
     * Return array of supported protocols
     */
    public static function getAvailableProtocols();

}
