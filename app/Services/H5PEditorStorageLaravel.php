<?php

namespace App\Services;

use H5PEditorStorage;
use Illuminate\Support\Facades\Storage;

class H5PEditorStorageLaravel implements H5PEditorStorage {
    public function saveFile($data, $path) {
        Storage::put($path, $data);
    }

    public function cloneContentFile($file, $fromPath, $toPath) {
        Storage::copy($fromPath.'/'.$file, $toPath.'/'.$file);
    }

    public function deleteContentFile($file, $path) {
        Storage::delete($path.'/'.$file);
    }

    public function saveContent($source, $destination) {
        Storage::put($destination, Storage::get($source));
    }

    public function deleteContent($path) {
        Storage::deleteDirectory($path);

    }

    public function deleteLibrary($libraryPath) {
        Storage::deleteDirectory($libraryPath);
    }

    public function hasPresavePermission($path) {
        return true;
    }

    public function getTmpPath() {
        return storage_path('app/tmp');
    }

    public function getContentUrl($path) {
        return Storage::url($path);
    }

    public function getContentFilePath($file) {
        return Storage::path($file);
    }

    public function getUploadedH5pPath() {
        return storage_path('app/h5p');
    }

    public function getUploadedH5pUrl() {
        return url('storage/h5p');
    }

    public function keepFile($path) {

    }

    public static function removeTemporarilySavedFiles($files) {
        foreach($files as $file) {
            Storage::delete($file);
        }
    }

    public function saveLibrary($library) {
        // Storage::put($path, Storage::get($source));
    }

    public function saveExport($source, $path) {
        Storage::put($path, Storage::get($source));
    }

    public function cloneContent($id, $newId) {

    }

    public function exportContent($id, $target) {

    }

    public function exportLibrary($library, $target) {

    }

    public function removeContent($content) {

    }

    public function removeLibrary($library) {

    }

    public function hasExport($filename) {

    }

    public function getCachedAssets($key) {

    }

    public function deleteCachedAssets($keys) {

    }

    public function cacheAssets(&$files, $keys) {

    }

    public function deleteExport($filename) {

    }

    public function getContent($file_path) {

    }

    public function moveContentDirectory($source, $contentId = null) {

    }

    public function getContentFile($file, $contentId) {

    }

    public function removeContentFile($file, $contentId) {

    }

    public function hasWriteAccess() {

    }

    public function hasPresave($libraryName, $developmentPath = null) {

    }

    public function getUpgradeScript($machineName, $majorVersion, $minorVersion) {

    }

    public function saveFileFromZip($path, $file, $stream) {

    }

    public function getLanguage($machineName, $majorVersion, $minorVersion, $language) {

    }

    public function getAvailableLanguages($machineName, $majorVersion, $minorVersion) {

    }

    public function getLibraries($libraries = null) {

    }

    public function alterLibraryFiles(&$files, $libraries) {

    }

    public static function saveFileTemporarily($data, $move_file) {

    }

    public static function markFileForCleanup($file, $content_id) {

    }
}
