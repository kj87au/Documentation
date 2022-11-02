<?php
$getDirectoriesText = function($isDesktopDocs, $renameFilesLink)
{
    $workspaceName = $isDesktopDocs ? "workspace" : "<a href='/docs/v2/our-platform/projects/getting-started#02-View-All-Projects'>directory of projects</a>" ;
    
    $fileType = $isDesktopDocs ? "private" : "public" ;
    
    echo "
<p>Your {$workspaceName} can contain nested directories of projects to make navigation easier. Similarly, the code and notebook files in your projects can contain nested directories of files. For example, if you have multiple Alpha models in your strategy, you can create an <span class='{$fileType}-directory-name'>alphas</span> directory in your project to hold a file for each Alpha model.
    ";
    
    if (!$isDesktopDocs)
    {
        echo "
You can <a href='/docs/v2/our-platform/projects/getting-started#08-Create-Project-Directories'>create directories of projects</a> and <a href='/docs/v2/our-platform/projects/files#04-Add-Directories'>directories of files</a>.
        ";
    }
    
    echo "</p>";
}
?>
