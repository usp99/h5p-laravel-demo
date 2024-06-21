<?php

namespace App\Services;

use H5PFrameworkInterface;

class H5PFrameworkLaravel implements H5PFrameworkInterface {

    public function fetchExternalData($url, $data = NULL, $blocking = TRUE, $stream = NULL, $fullData = FALSE, $headers = array(), $files = array(), $method = 'POST') {

        $client = new \GuzzleHttp\Client();
        $options = [
            'headers' => $headers
        ];

        if ($data) {
            $options['body'] = $data;
        }

        $response = $client->request('GET', $url, $options);
        return $response->getBody();
    }

    public function getPlatformInfo() {
        return [
            'name' => 'Laravel H5P',
            'version' => '1.0.0',
            'h5pVersion' => H5PCore::$coreVersion,
        ];
    }

    public function setErrorMessage($message, $code = null) {

    }

    public function setSuccessMessage($message) {

    }

    public function setLibraryTutorial($libraryName, $tutorialUrl) {

    }

    public function setInfoMessage($message) {

    }

    public function saveFile($data, $contentId) {

    }

    public function loadLibraries() {

    }

    public function saveLibraryData(&$libraryData, $new = TRUE) {

    }

    public function getLibraryData($machineName, $majorVersion = null, $minorVersion = null) {

    }

    public function deleteLibrary($library) {

    }

    public function setLibraryTutorialUrl($machineName, $tutorialUrl) {

    }

    public function getMessages($type) {

    }

    public function t($message, $replacements = array()) {

    }

    public function getLibraryFileUrl($libraryFolderName, $fileName) {

    }

    public function getUploadedH5pFolderPath() {

    }

    public function getUploadedH5pPath() {

    }

    public function loadAddons() {

    }

    public function getLibraryConfig($libraries = NULL) {

    }

    public function getAdminUrl() {

    }

    public function getLibraryId($machineName, $majorVersion = NULL, $minorVersion = NULL) {

    }

    public function getWhitelist($isLibrary, $defaultContentWhitelist, $defaultLibraryWhitelist) {

    }

    public function isPatchedLibrary($library) {

    }

    public function isInDevMode() {

    }

    public function mayUpdateLibraries() {

    }

    public function insertContent($content, $contentMainId = NULL) {

    }

    public function updateContent($content, $contentMainId = NULL) {

    }

    public function resetContentUserData($contentId) {

    }

    public function saveLibraryDependencies($libraryId, $dependencies, $dependency_type) {

    }

    public function copyLibraryUsage($contentId, $copyFromId, $contentMainId = NULL) {

    }

    public function deleteContentData($contentId) {

    }

    public function deleteLibraryUsage($contentId) {

    }

    public function saveLibraryUsage($contentId, $librariesInUse) {

    }

    public function getLibraryUsage($libraryId, $skipContent = FALSE) {

    }

    public function loadLibrary($machineName, $majorVersion, $minorVersion) {

    }

    public function loadLibrarySemantics($machineName, $majorVersion, $minorVersion) {

    }

    public function alterLibrarySemantics(&$semantics, $machineName, $majorVersion, $minorVersion) {

    }

    public function deleteLibraryDependencies($libraryId) {

    }

    public function lockDependencyStorage() {

    }

    public function unlockDependencyStorage() {

    }

    public function loadContent($id) {

    }

    public function loadContentDependencies($id, $type = NULL) {

    }

    public function getOption($name, $default = NULL) {

    }

    public function setOption($name, $value) {

    }

    public function updateContentFields($id, $fields) {

    }

    public function clearFilteredParameters($library_ids) {

    }

    public function getNumNotFiltered() {

    }

    public function getNumContent($libraryId, $skip = NULL) {

    }

    public function isContentSlugAvailable($slug) {

    }

    public function getLibraryStats($type) {

    }

    public function getNumAuthors() {

    }

    public function saveCachedAssets($key, $libraries) {

    }

    public function deleteCachedAssets($library_id) {

    }

    public function getLibraryContentCount() {

    }

    public function afterExportCreated($content, $filename) {

    }

    public function hasPermission($permission, $id = NULL) {

    }

    public function replaceContentTypeCache($contentTypeCache) {

    }

    public function libraryHasUpgrade($library) {

    }

    public function replaceContentHubMetadataCache($metadata, $lang) {

    }

    public function getContentHubMetadataCache($lang = 'en') {

    }

    public function getContentHubMetadataChecked($lang = 'en') {

    }

    public function setContentHubMetadataChecked($time, $lang = 'en') {

    }

}
