<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_fbf7b1f78a4fd91480d0d9e63471cda2 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute($this->getContext($context, "admin"), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getContext($context, "admin"), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create", 1 => array("subclass" => $this->getContext($context, "subclass"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "subclass"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 16,  27 => 14,  93 => 68,  399 => 158,  396 => 157,  383 => 150,  362 => 141,  359 => 140,  348 => 136,  345 => 135,  325 => 125,  294 => 111,  270 => 100,  267 => 98,  239 => 86,  237 => 85,  234 => 84,  221 => 78,  218 => 77,  196 => 71,  193 => 70,  167 => 60,  162 => 57,  155 => 55,  148 => 53,  142 => 50,  130 => 46,  127 => 45,  125 => 44,  117 => 41,  102 => 39,  73 => 29,  26 => 20,  21 => 12,  19 => 11,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  787 => 180,  784 => 179,  776 => 175,  771 => 173,  760 => 168,  758 => 167,  747 => 162,  742 => 160,  740 => 159,  737 => 158,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  701 => 146,  688 => 138,  685 => 135,  680 => 134,  671 => 131,  657 => 123,  653 => 122,  649 => 121,  634 => 117,  631 => 116,  629 => 115,  610 => 110,  587 => 103,  584 => 102,  567 => 98,  548 => 93,  541 => 91,  538 => 90,  520 => 89,  518 => 88,  506 => 82,  500 => 80,  494 => 78,  487 => 76,  484 => 75,  481 => 74,  469 => 71,  461 => 70,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  408 => 50,  405 => 49,  385 => 41,  368 => 34,  350 => 26,  344 => 24,  337 => 22,  335 => 129,  308 => 118,  299 => 8,  290 => 5,  288 => 4,  285 => 3,  278 => 384,  276 => 102,  273 => 101,  266 => 363,  258 => 351,  255 => 350,  253 => 339,  235 => 308,  225 => 295,  222 => 294,  220 => 287,  217 => 286,  202 => 73,  199 => 262,  194 => 245,  181 => 229,  171 => 213,  161 => 199,  159 => 193,  156 => 192,  119 => 42,  109 => 102,  106 => 40,  99 => 38,  96 => 67,  89 => 47,  61 => 2,  251 => 128,  244 => 124,  240 => 323,  232 => 83,  227 => 80,  212 => 276,  186 => 236,  154 => 186,  134 => 158,  129 => 145,  126 => 144,  116 => 113,  41 => 2,  30 => 15,  24 => 13,  22 => 12,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 136,  669 => 130,  666 => 129,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 109,  605 => 108,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 77,  486 => 130,  483 => 129,  480 => 128,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  453 => 142,  446 => 139,  430 => 137,  428 => 59,  425 => 135,  414 => 52,  409 => 124,  403 => 48,  400 => 47,  394 => 156,  388 => 42,  384 => 116,  377 => 147,  374 => 36,  371 => 144,  358 => 106,  349 => 103,  342 => 133,  339 => 100,  329 => 126,  324 => 92,  321 => 124,  319 => 90,  311 => 14,  297 => 84,  289 => 109,  282 => 79,  272 => 76,  269 => 75,  250 => 338,  247 => 66,  243 => 324,  238 => 309,  233 => 301,  228 => 59,  208 => 74,  200 => 106,  184 => 230,  178 => 45,  175 => 43,  173 => 62,  157 => 41,  152 => 38,  149 => 179,  146 => 178,  139 => 49,  107 => 24,  101 => 73,  95 => 37,  90 => 34,  87 => 17,  84 => 33,  81 => 40,  76 => 57,  57 => 27,  47 => 19,  39 => 17,  318 => 144,  312 => 142,  306 => 140,  303 => 139,  292 => 134,  286 => 80,  274 => 77,  268 => 370,  248 => 333,  242 => 112,  236 => 63,  230 => 300,  214 => 75,  203 => 56,  197 => 246,  187 => 86,  170 => 61,  158 => 84,  153 => 71,  147 => 68,  144 => 173,  136 => 48,  132 => 59,  123 => 68,  120 => 56,  112 => 26,  110 => 77,  104 => 87,  98 => 21,  92 => 19,  86 => 64,  78 => 30,  72 => 56,  70 => 33,  67 => 27,  62 => 166,  59 => 49,  54 => 26,  51 => 24,  804 => 266,  801 => 265,  796 => 260,  789 => 181,  783 => 253,  779 => 251,  777 => 250,  774 => 174,  768 => 247,  766 => 246,  763 => 169,  757 => 243,  755 => 166,  752 => 241,  746 => 239,  744 => 161,  741 => 237,  735 => 235,  733 => 234,  730 => 153,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 147,  698 => 145,  695 => 180,  690 => 139,  687 => 137,  683 => 272,  681 => 203,  676 => 262,  674 => 132,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 120,  642 => 218,  640 => 119,  637 => 216,  632 => 213,  626 => 114,  623 => 210,  620 => 209,  606 => 208,  600 => 206,  595 => 203,  589 => 104,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 96,  552 => 194,  550 => 193,  546 => 92,  544 => 190,  540 => 188,  537 => 178,  534 => 177,  530 => 168,  521 => 163,  515 => 87,  512 => 159,  509 => 159,  503 => 81,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 72,  468 => 146,  464 => 145,  459 => 69,  456 => 68,  454 => 141,  451 => 141,  448 => 139,  441 => 138,  438 => 137,  435 => 136,  432 => 135,  426 => 58,  423 => 57,  420 => 132,  417 => 130,  410 => 129,  407 => 128,  401 => 127,  398 => 119,  393 => 125,  390 => 43,  387 => 152,  381 => 122,  375 => 168,  373 => 159,  369 => 157,  366 => 142,  363 => 32,  357 => 139,  354 => 119,  347 => 102,  341 => 114,  336 => 99,  333 => 112,  326 => 93,  316 => 16,  307 => 87,  305 => 70,  300 => 138,  295 => 66,  291 => 82,  281 => 385,  263 => 362,  259 => 55,  256 => 120,  245 => 88,  226 => 36,  224 => 102,  219 => 116,  215 => 277,  210 => 267,  207 => 266,  204 => 264,  198 => 22,  191 => 69,  189 => 237,  182 => 64,  179 => 221,  177 => 63,  172 => 112,  165 => 76,  163 => 86,  151 => 185,  145 => 77,  141 => 172,  138 => 61,  135 => 93,  118 => 28,  114 => 108,  111 => 107,  91 => 56,  82 => 83,  75 => 39,  64 => 26,  52 => 21,  50 => 25,  48 => 40,  44 => 74,  42 => 62,  38 => 18,  36 => 16,  370 => 100,  367 => 99,  361 => 107,  355 => 27,  352 => 138,  346 => 92,  343 => 91,  340 => 90,  332 => 20,  330 => 87,  327 => 86,  320 => 75,  315 => 83,  313 => 15,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 6,  287 => 64,  283 => 106,  280 => 130,  277 => 78,  271 => 371,  265 => 125,  262 => 63,  260 => 94,  257 => 61,  254 => 91,  249 => 89,  246 => 54,  241 => 47,  223 => 117,  216 => 99,  209 => 113,  192 => 87,  188 => 68,  185 => 65,  180 => 94,  176 => 220,  174 => 214,  169 => 207,  166 => 206,  164 => 200,  160 => 75,  143 => 48,  137 => 47,  131 => 157,  128 => 58,  124 => 129,  121 => 128,  115 => 27,  113 => 39,  100 => 36,  79 => 32,  68 => 30,  65 => 15,  60 => 25,  56 => 12,  40 => 15,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 18,  97 => 37,  94 => 57,  88 => 85,  83 => 35,  80 => 41,  77 => 20,  74 => 20,  71 => 19,  69 => 13,  66 => 12,  63 => 50,  55 => 22,  49 => 20,  46 => 35,  43 => 21,  12 => 34,  53 => 22,  34 => 26,  31 => 5,  28 => 68,);
    }
}
