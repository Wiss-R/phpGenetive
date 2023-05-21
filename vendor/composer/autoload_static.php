<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47715223191fb6c04f6bc6ce6fcb1b69
{
    public static $files = array (
        '271cb6f21c9ae69ccbad5cc1b8d6707c' => __DIR__ . '/..' . '/wapmorgan/morphos/src/English/functions.php',
        '34d31f2fd925dfe2696a521f5ec12db2' => __DIR__ . '/..' . '/wapmorgan/morphos/src/Russian/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'morphos\\' => 8,
        ),
        'c' => 
        array (
            'cijic\\phpMorphy\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'morphos\\' => 
        array (
            0 => __DIR__ . '/..' . '/wapmorgan/morphos/src',
        ),
        'cijic\\phpMorphy\\' => 
        array (
            0 => __DIR__ . '/..' . '/cijic/phpmorphy/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'phpMorphy' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/common.php',
        'phpMorphy_AncodesResolver_AsIs' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AncodesResolver_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AncodesResolver_Proxy' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AncodesResolver_ToDialingAncodes' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AncodesResolver_ToText' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AnnotDecoder_Base' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AnnotDecoder_Common' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AnnotDecoder_Factory' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AnnotDecoder_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_AnnotDecoder_Predict' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Exception' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/common.php',
        'phpMorphy_FilesBundle' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/common.php',
        'phpMorphy_Fsa' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa.php',
        'phpMorphy_Fsa_Decorator' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa.php',
        'phpMorphy_Fsa_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa.php',
        'phpMorphy_Fsa_Proxy' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa.php',
        'phpMorphy_Fsa_Sparse_File' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/access/fsa_sparse_file.php',
        'phpMorphy_Fsa_Sparse_Mem' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/access/fsa_sparse_mem.php',
        'phpMorphy_Fsa_Sparse_Shm' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/access/fsa_sparse_shm.php',
        'phpMorphy_Fsa_Tree_File' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/access/fsa_tree_file.php',
        'phpMorphy_Fsa_Tree_Mem' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/access/fsa_tree_mem.php',
        'phpMorphy_Fsa_Tree_Shm' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/access/fsa_tree_shm.php',
        'phpMorphy_Fsa_WordsCollector' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa.php',
        'phpMorphy_GramInfo' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/graminfo.php',
        'phpMorphy_GramInfo_AncodeCache' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/graminfo.php',
        'phpMorphy_GramInfo_Decorator' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/graminfo.php',
        'phpMorphy_GramInfo_Interace' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/graminfo.php',
        'phpMorphy_GramInfo_Proxy' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/graminfo.php',
        'phpMorphy_GramInfo_Proxy_WithHeader' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/graminfo.php',
        'phpMorphy_GramInfo_RuntimeCaching' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/graminfo.php',
        'phpMorphy_GramTab' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/gramtab.php',
        'phpMorphy_GramTab_Empty' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/gramtab.php',
        'phpMorphy_GramTab_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/gramtab.php',
        'phpMorphy_GramTab_Proxy' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/gramtab.php',
        'phpMorphy_Graminfo_File' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/access/graminfo_file.php',
        'phpMorphy_Graminfo_Mem' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/access/graminfo_mem.php',
        'phpMorphy_Graminfo_Shm' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/graminfo/access/graminfo_shm.php',
        'phpMorphy_GrammemsProvider_Base' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/langs_stuff/common.php',
        'phpMorphy_GrammemsProvider_Decorator' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/langs_stuff/common.php',
        'phpMorphy_GrammemsProvider_Empty' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/langs_stuff/common.php',
        'phpMorphy_GrammemsProvider_Factory' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/langs_stuff/common.php',
        'phpMorphy_GrammemsProvider_ForFactory' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/langs_stuff/common.php',
        'phpMorphy_GrammemsProvider_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/langs_stuff/common.php',
        'phpMorphy_GrammemsProvider_ru_RU' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/langs_stuff/ru_ru.php',
        'phpMorphy_Link' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa_state.php',
        'phpMorphy_Link_Annot' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa_state.php',
        'phpMorphy_Link_Base' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa_state.php',
        'phpMorphy_Morphier_Base' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Bulk' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Common' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Empty' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Finder_Base' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Finder_Common' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Finder_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Finder_Predict_Databse' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Finder_Predict_Suffix' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Helper' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_PredictCollector' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Predict_Database' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Morphier_Predict_Suffix' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_Semaphore' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/shm_utils.php',
        'phpMorphy_Semaphore_Empty' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/shm_utils.php',
        'phpMorphy_Semaphore_Nix' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/shm_utils.php',
        'phpMorphy_Semaphore_Win' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/shm_utils.php',
        'phpMorphy_Shm_Cache' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/shm_utils.php',
        'phpMorphy_Shm_Cache_FileDescriptor' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/shm_utils.php',
        'phpMorphy_Shm_Cache_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/shm_utils.php',
        'phpMorphy_Shm_Header' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/shm_utils.php',
        'phpMorphy_Source_Dba' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/source.php',
        'phpMorphy_Source_Fsa' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/source.php',
        'phpMorphy_Source_Interface' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/source.php',
        'phpMorphy_State' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/fsa/fsa_state.php',
        'phpMorphy_Storage' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/storage.php',
        'phpMorphy_Storage_Factory' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/storage.php',
        'phpMorphy_Storage_File' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/storage.php',
        'phpMorphy_Storage_Mem' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/storage.php',
        'phpMorphy_Storage_Proxy' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/storage.php',
        'phpMorphy_Storage_Shm' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/storage.php',
        'phpMorphy_UnicodeHelper' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_Base' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_MultiByteFixed' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_singlebyte' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_ucs_2be' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_ucs_2le' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_ucs_4be' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_ucs_4le' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_utf_16_Base' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_utf_16be' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_utf_16le' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_utf_32_Base' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_utf_32be' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_utf_32le' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_UnicodeHelper_utf_8' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/unicode.php',
        'phpMorphy_WordDescriptor' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_WordDescriptor_Collection' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
        'phpMorphy_WordDescriptor_Collection_Serializer' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/common.php',
        'phpMorphy_WordForm' => __DIR__ . '/..' . '/cijic/phpmorphy/libs/phpmorphy/src/morphiers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47715223191fb6c04f6bc6ce6fcb1b69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47715223191fb6c04f6bc6ce6fcb1b69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47715223191fb6c04f6bc6ce6fcb1b69::$classMap;

        }, null, ClassLoader::class);
    }
}
