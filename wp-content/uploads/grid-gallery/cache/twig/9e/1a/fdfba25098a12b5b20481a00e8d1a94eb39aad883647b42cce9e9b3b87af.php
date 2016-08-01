<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_9e1afdfba25098a12b5b20481a00e8d1a94eb39aad883647b42cce9e9b3b87af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getshow($_areaWidth = null, $_galleryId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $_areaWidth,
            "galleryId" => $_galleryId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"media-wrapr ";
            if (twig_test_empty((isset($context["galleryId"]) ? $context["galleryId"] : null))) {
                echo "no-gallery-id";
            }
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["areaWidth"]) ? $context["areaWidth"] : null), "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">
        <h1>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px;\"
                data-gallery-id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>
            ";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>
        <h3>";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>
        <a class=\"button button-primary button-hero\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
            echo "\" style=\"width: 400px;margin-bottom: 20px;\">
            <i class=\"fa fa-instagram fa-2x\"></i>
            ";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Instagram account")), "html", null, true);
            echo "
        </a>
        ";
            // line 15
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                // line 16
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "tumblr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 22
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "facebook", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 26
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>

            <h3 style=\"margin-top: 0px\">";
                // line 29
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from cloud services")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "ftp", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 32
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "googledrive", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 39
                echo "            <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>
                ";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO")), "html", null, true);
                echo "
            </a>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 54
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 60
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 66
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 72
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </button>
        ";
            }
            // line 75
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 75,  193 => 70,  186 => 66,  181 => 64,  174 => 60,  169 => 58,  162 => 54,  157 => 52,  131 => 39,  125 => 36,  120 => 34,  115 => 32,  110 => 30,  106 => 29,  100 => 26,  95 => 24,  90 => 22,  85 => 20,  80 => 18,  74 => 16,  67 => 13,  62 => 11,  53 => 8,  48 => 6,  42 => 3,  78 => 18,  75 => 17,  72 => 15,  69 => 15,  66 => 14,  61 => 12,  58 => 10,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  39 => 4,  36 => 3,  33 => 2,  46 => 2,  21 => 1,  2270 => 4,  2258 => 3,  2250 => 1660,  2246 => 1659,  2240 => 1656,  2236 => 1655,  2230 => 1652,  2226 => 1651,  2220 => 1648,  2216 => 1647,  2211 => 1644,  2200 => 1641,  2191 => 1640,  2186 => 1639,  2184 => 1622,  2179 => 1620,  2176 => 1619,  2172 => 1474,  2162 => 1470,  2153 => 1464,  2149 => 1463,  2144 => 1461,  2135 => 1455,  2131 => 1454,  2126 => 1453,  2121 => 1452,  2118 => 1451,  2114 => 1315,  2111 => 1314,  2102 => 1306,  2098 => 1305,  2091 => 1301,  2085 => 1298,  2082 => 1297,  2079 => 1296,  2074 => 1311,  2072 => 1296,  2066 => 1293,  2062 => 1292,  2055 => 1288,  2049 => 1285,  2045 => 1283,  2042 => 1282,  2031 => 1273,  2027 => 1272,  2023 => 1271,  2019 => 1270,  2015 => 1269,  2008 => 1268,  2004 => 1267,  2000 => 1266,  1996 => 1265,  1992 => 1264,  1988 => 1263,  1980 => 1258,  1971 => 1252,  1964 => 1248,  1953 => 1240,  1949 => 1239,  1944 => 1237,  1940 => 1236,  1932 => 1231,  1923 => 1225,  1916 => 1221,  1907 => 1215,  1900 => 1211,  1891 => 1205,  1884 => 1201,  1875 => 1195,  1868 => 1191,  1859 => 1185,  1852 => 1181,  1843 => 1175,  1836 => 1171,  1830 => 1167,  1828 => 1164,  1823 => 1161,  1820 => 1157,  1818 => 1156,  1814 => 1154,  1811 => 1153,  1802 => 905,  1798 => 904,  1790 => 899,  1784 => 896,  1780 => 894,  1777 => 893,  1772 => 889,  1764 => 884,  1760 => 883,  1753 => 879,  1748 => 877,  1742 => 873,  1732 => 863,  1726 => 860,  1719 => 856,  1714 => 854,  1708 => 850,  1706 => 849,  1702 => 847,  1699 => 843,  1697 => 842,  1693 => 840,  1690 => 839,  1685 => 832,  1682 => 819,  1678 => 816,  1675 => 807,  1671 => 804,  1669 => 803,  1666 => 802,  1659 => 834,  1656 => 802,  1652 => 799,  1649 => 783,  1645 => 780,  1642 => 772,  1638 => 769,  1635 => 760,  1631 => 757,  1628 => 749,  1624 => 746,  1621 => 738,  1617 => 735,  1614 => 716,  1610 => 713,  1607 => 706,  1603 => 703,  1600 => 696,  1596 => 693,  1593 => 681,  1589 => 678,  1586 => 671,  1582 => 668,  1579 => 653,  1574 => 649,  1571 => 630,  1568 => 629,  1564 => 626,  1561 => 625,  1553 => 619,  1551 => 618,  1547 => 616,  1545 => 615,  1541 => 613,  1539 => 612,  1535 => 610,  1533 => 609,  1529 => 607,  1527 => 606,  1518 => 600,  1512 => 599,  1507 => 597,  1501 => 596,  1496 => 594,  1490 => 593,  1483 => 589,  1473 => 582,  1466 => 578,  1456 => 571,  1450 => 570,  1446 => 569,  1440 => 568,  1433 => 564,  1426 => 559,  1423 => 558,  1415 => 552,  1413 => 550,  1409 => 548,  1407 => 547,  1403 => 545,  1401 => 543,  1398 => 542,  1395 => 526,  1393 => 515,  1389 => 513,  1386 => 512,  1382 => 482,  1379 => 481,  1372 => 483,  1370 => 481,  1366 => 479,  1364 => 463,  1360 => 461,  1358 => 460,  1353 => 457,  1350 => 453,  1348 => 452,  1344 => 450,  1341 => 449,  1334 => 444,  1326 => 439,  1322 => 438,  1318 => 437,  1313 => 435,  1309 => 433,  1306 => 432,  1299 => 428,  1295 => 427,  1289 => 424,  1285 => 422,  1280 => 419,  1278 => 410,  1274 => 408,  1272 => 399,  1268 => 397,  1266 => 387,  1262 => 385,  1259 => 384,  1257 => 383,  1253 => 381,  1251 => 380,  1247 => 378,  1245 => 369,  1241 => 367,  1239 => 358,  1235 => 356,  1233 => 346,  1229 => 344,  1226 => 343,  1224 => 342,  1220 => 340,  1218 => 339,  1214 => 337,  1212 => 328,  1208 => 326,  1206 => 325,  1202 => 323,  1200 => 318,  1196 => 316,  1193 => 315,  1191 => 314,  1186 => 311,  1184 => 307,  1180 => 305,  1177 => 304,  1173 => 298,  1170 => 297,  1165 => 293,  1162 => 288,  1159 => 287,  1152 => 299,  1150 => 297,  1146 => 295,  1144 => 287,  1140 => 285,  1138 => 284,  1134 => 282,  1131 => 275,  1128 => 263,  1124 => 260,  1122 => 258,  1118 => 256,  1116 => 254,  1111 => 251,  1109 => 249,  1106 => 248,  1102 => 241,  1100 => 240,  1096 => 238,  1093 => 231,  1089 => 228,  1087 => 226,  1083 => 224,  1081 => 222,  1076 => 219,  1074 => 218,  1070 => 216,  1068 => 214,  1065 => 213,  1061 => 209,  1059 => 200,  1052 => 196,  1043 => 190,  1039 => 189,  1032 => 184,  1030 => 183,  1026 => 181,  1023 => 180,  1019 => 1619,  1009 => 1612,  1004 => 1610,  998 => 1607,  994 => 1606,  990 => 1605,  984 => 1602,  979 => 1601,  977 => 1600,  970 => 1596,  963 => 1592,  938 => 1569,  928 => 1565,  922 => 1562,  912 => 1561,  902 => 1560,  899 => 1559,  895 => 1558,  891 => 1556,  889 => 1484,  883 => 1481,  878 => 1479,  872 => 1475,  870 => 1451,  865 => 1449,  862 => 1448,  856 => 1447,  849 => 1443,  838 => 1438,  832 => 1435,  828 => 1434,  823 => 1433,  816 => 1429,  807 => 1423,  802 => 1421,  797 => 1419,  782 => 1408,  775 => 1404,  769 => 1401,  757 => 1393,  754 => 1392,  750 => 1391,  745 => 1389,  739 => 1385,  729 => 1381,  724 => 1379,  718 => 1378,  712 => 1377,  709 => 1376,  705 => 1375,  702 => 1374,  699 => 1373,  696 => 1372,  694 => 1371,  691 => 1370,  689 => 1361,  683 => 1358,  678 => 1356,  670 => 1351,  663 => 1347,  653 => 1340,  648 => 1338,  642 => 1335,  637 => 1333,  632 => 1331,  625 => 1327,  621 => 1326,  614 => 1322,  608 => 1319,  603 => 1317,  600 => 1316,  598 => 1314,  595 => 1313,  593 => 1282,  589 => 1280,  587 => 1153,  580 => 1148,  577 => 1141,  573 => 1138,  570 => 1130,  565 => 1126,  562 => 1118,  558 => 1115,  555 => 1107,  551 => 1104,  548 => 1096,  544 => 1093,  541 => 1079,  537 => 1076,  534 => 1068,  530 => 1065,  527 => 1058,  523 => 1055,  520 => 1048,  516 => 1045,  513 => 1037,  509 => 1034,  506 => 1026,  502 => 1023,  499 => 1015,  495 => 1012,  492 => 1004,  488 => 1001,  485 => 993,  481 => 990,  478 => 978,  474 => 975,  471 => 955,  468 => 953,  465 => 952,  462 => 951,  459 => 944,  456 => 915,  450 => 910,  448 => 893,  444 => 891,  442 => 839,  439 => 838,  437 => 625,  434 => 624,  432 => 558,  429 => 557,  427 => 512,  419 => 506,  417 => 505,  405 => 496,  401 => 495,  393 => 492,  388 => 490,  383 => 487,  381 => 449,  378 => 448,  376 => 304,  373 => 303,  371 => 180,  365 => 177,  361 => 176,  357 => 175,  353 => 174,  350 => 173,  347 => 172,  344 => 171,  341 => 170,  333 => 165,  321 => 158,  313 => 157,  307 => 153,  300 => 149,  296 => 147,  283 => 137,  274 => 136,  271 => 135,  268 => 134,  265 => 133,  262 => 132,  260 => 131,  257 => 130,  254 => 129,  251 => 128,  248 => 127,  245 => 126,  243 => 125,  240 => 124,  237 => 123,  234 => 122,  232 => 121,  229 => 120,  226 => 119,  223 => 118,  221 => 117,  218 => 116,  216 => 115,  209 => 110,  203 => 108,  201 => 107,  198 => 72,  196 => 105,  188 => 100,  178 => 93,  173 => 91,  164 => 85,  159 => 83,  150 => 48,  145 => 46,  141 => 74,  138 => 42,  132 => 62,  129 => 61,  126 => 60,  123 => 59,  118 => 55,  113 => 56,  111 => 55,  105 => 52,  97 => 47,  89 => 42,  81 => 37,  70 => 31,  63 => 13,  55 => 10,  52 => 9,  49 => 7,);
    }
}
