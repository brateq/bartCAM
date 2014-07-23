<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.2
*/error_reporting(6135);$ec=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($ec||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Cf=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Cf)$$X=$Cf;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé�vt2���!�r0���t~�U�'3M��W�B�'c�P�:6T\rc�A�zr_�WK�\r-�VNFS%~�c���&�\\^�r����u�ŎÞ�ً4'7k����Q��h�'g\rFB\ryT7SS�P�1=ǤcI��:�d��m>�S8L�J��t.M���	ϋ`'C����889�� �Q����2�#8А����6m����j��h�<�����9/��:�J�)ʂ�\0d>!\0Z��v�n��o(���k�7��s��>��!�R\"*nS�\0@P\"��(�#[���@g�o���zn�9k�8�n���1�I*��=�n������0�c(�;�à��!���*c��>Ύ�E7D�LJ��1�J=���1L��?�s=#`�3\$4���uȱ��zG�C YAt�?;�Q�k&��YP�u��ǯ}UaHV%G;�s��<A\0\\��P�\\��&ª�V��\n�SU�t���r���2�	l^�Z6�ej����A�d�[�sն�JP����ҝ��8�=����6#˂74*���#e���!�7{�6��<o�C�9v[�M��-`��k�>�l�ڴ��I��H�3�x����w0t6��%MR%��jh�B�<�\0�AQ<P<:��u/�;\\>��-��ʈ��QH\nv�L+v�æ�<�\r��v����\\*����Ӵݢg��n˩��TЩ2P�\r��ߋ\"+z�8���:#�����2��J[�i����;z�����r�3#�ى�:�n�\r㽃e�pdݍ� �2c��4�k���\rG��E6_����މb��/��HB%�0�>���hoW�nxl֍�浃CQ^�������\r����4lK{�Z��:���Ã�.�p��Ă�J�B-�+B���(�T�%��J�0�l�T�`+�-��@B��ۄV��\0��C�,�0t���F���?Ġ�\na@Ɍ>��ZEC��O�-���^Q�&���)I)�����R�]\r��9�7_��\r�F80�Ob�	���>���\nR�_��8��٫�ov0�bCA�F!�t��ă%0�/�zAYO(4������	'�] I��8hH�05�3�@x&n��|T���)`�.�s6eY�D�z�����Jѓ��.��{GEb��Ӌ����2��{\$**��@�C��-:zYHZI��5F]��Y��C�O�A����`x'�.*9t'{�(�wP����=�*���*�xwr��*c���c|�D���V��\r�V.�0���V�d�?Ҁ��,E͝`T��6ۈ-����ڎT[ѐ�z��.Ar��̀P��n�c=a�9F�n�!�u��A���0iP��J6e�T]V�[\rX��a��v�k�\n+E���ܕ*\0�~���@g\"�NCI\$��Ɍ���x@W�y�*vuD�8�=뭪-v��4�d�D�yI�Ҥ���_h��'z�VͶ�����6��Yz�:�Qc��ڲ���w��0��]xr�!�@��/-�*�5���I.�]�Yxu���o&�:P�|Cyֲw����@L��գGf؆��)^��Ƣ+��Q5����L4\$Mpo�0i�\rۻ�k��4*w7��S'��Z݄nAb�!�1�)�oݖ9�c\0b��o-~2w4X,,��8m'�����Y��FH��3GqQZ-l�\0��w�e�d5������i�.���d�)\\�h~\\Ẁ�Lá���mg�u�2lb���Z�C�-6�ꍖd�l��b\re�Mu��gra6ZD���Uʙ!K-��0�9�beH�\"��[J˝'���Z��o�a�)�X�ƃ&��t�8��GZ.��ژ��+�lr���̯]k�#��j-����W��P,���>@�` \rc3\"\\Ҋq2�z���@M�po���0p���d~OٙǦ����]��a��;Ix��xh�a�͇�0N���~g��?	��L�cu��w��}���t��<���Ïŷ�qS�v��@�gsW}�L�(kyȹ/6�C�8\r���]\\��LU��^�nqiQ�n�T>A�9\"���kF����.*�߹����T���C��r?:�܄�w�M�,�\$m|�x�m�������Bmu	��=�[�� yn�'��h����@��C�v�S2dSV� �(��\">H�{�-G��");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n0��S��a9��S`�����&�(��n0���QI�(.��q���O)��̢㑔�1�E#)��x8\n���\\9�D⹄�d+���g�%(R,�BqH�' �G�q.�,2�������A�GCy��#L�S���\n�L���8n:��S�G�:�\$�%��;��)�ؙ�Q��G�sE������)�Nn�MN�S��@t9L��|1���L�Ti3���C	�{�������w0�@�wә�����Ϋ��w{��J8\\C(��ɨ�Z�j9�a[�� -��;!�H�<��`�߅(䚱	+�Ḫ�2\r�K�9�@����`�����PP�0L#��#j���+ �Eɒ���p�9a���;m�\\8Cz�����^��]\rð�\\7�C8_D�p^�P��\0̱�w &c4^�R�N9D�\\ܙ�j�3��@��\r8a;M�l7��d<3�cp�Г��:)\\;�C��ц��!6HT�,4O�=ц!pd�T��Ss;�c}&&����ń�5cY��p�1`�I��bKPRt�f2X黛F��-!\r��icY���WL\\Pޮ#r'b�]^2����C��1�(4�&��D�*J��<�]�:��/�T�:tܿ7��PaH^?�(�sƁs�0��PQ��0�����?�*��\r�b.�.�����2�fO|f�<�k2L��07��8��!��c+6fW#~<I+!-�Q���H��:�!\"���2	5����M�m�1+���-�f᳇���8\\����n�F�<���څ�ʁ����\r#ꅎav�����>�2�1�N(��<�����X�t����c���:��������'���Wڌ�RE8�ر�p@��ܠ���5�Ѩ��(8/ѧb3�~\"J;��)^�=�d�v��J�����'\r�:�öȧ[ �ƘŃY�v�������Y���CL�(7a��Ί	z�a�����g�2\\\r�����B�%Q �.��A�I	\r��-�%��m-�e��\0���/DZ !P�x��H��6`X�b*g4E����\"	Ph��i�P��B\0�������eT�r�YJ�\\+��������:>&-�#��d�y{Iot�?CO ߛ�&q��\0�d��hG��;�B�	�B,\r)�4���q#\r��M&�V�X!��U����X��z!��0�C��.J964��	#�8����ٓ3jE���a #���	ag� 9��1&��<l����)H%4�c�H��#:��p]Ӱ����y(�Pra��,���s�rO�[�ۮ.N԰��5(a#�(�=���\$xy�\$ȡQ�w��u�4zr���:WT_(���X70I�H*�I諗�I(1�%O^�\"0{N'̌�aҌѲ9GC��K�e�����Ḥ��R��NIh\0�H�-�����i������åci�&eCə���e�j��j~1\r@�����6\r�����E�\n �6�6wg=%H\n���:���5�|'�U�M�8���JP�U������I�I�<ɐ)��Z��8:�d����r���!��h.�-\r�Z��9�B��z���MŮW3t�s����������b�LcB���VBt�C��vp.��[R^o�	+x>�*��v��9�rN�H!4vL1�����m��:��ThG�a�\"�5��a��3�BȢۈ�5a�-42b��Z��pnO��A\r��`�lf�5���>ՙ��[�#����p'�\rV\0��/b/�93�C��=���s4��:��U�(9.ƆG3�'ۍ�����I�nXvp���=X[nAѸ7Q�UKډ� t�O���^dt�z�q�hb؋,�����U8em�����ʉ5��쭠�ؼ�k`Ks�[�7�L�9y%q�~��#@V̥���.fU�\$�D2f~�:�3�Pč�^�zkA�f�ȡ�zq�?��b����Q2'(�]o%wg�B?�*�2��א�OX�{\$؏D�bf���H\n�4&0L�s\0�Hbw�.�3�p@{��D� �8ӅlW,�!�['[�^1BL]�:�0��TV�|�9۰�oy��jop��@P	�f������9	���[ M�C�@�����c��������j*-E�y�P���f��q�GèODNϣM@�yLe珗��K��	X��(0��R�f� &u0�\n�@o�Q +����F\$������C\"�� ���,�fH��чe���m���7w'ȉ?�&~��z��h��Q��7\0�k�����o��Yq�h�/d��F8�9�}2u��l�fS{��ߣ���,I����]���,�F��Bn���[=��sIy\$��@䩍>� xn\n���J\$��,���h�'t� Z@�����V��L\"�	�p&�4��N����*@�ݏ��M&��*��\0�Z�\r\r+L�\rU\$a)�Bm���3p:�P@+0FG�z�'.�?\ni�,�`-cx�/4󐾑F�i%d�\0P�k��k��/����Ve�}����ڃ���N4@bg2��]�>�z `Ƣ<P�Sn4����M�n�H��f�F�\$�ư�άLXl��l�R?�X�0�J\r����vp��k\"��ܳ��j��u\0���=\0k@Mp�|Ԑ�U�_@�LKXzqh��b\$��j4�C`+Ѣs\"֭��@�`P��F#�\n,�j�(O��\0[Q(-�2�p�RXZ\0��d������1�����P�1�0@�-V���]\n���\0.�n�nbu!�>�r\"#D�\r�-�fib4R�I�\$�4�L`t�0:�d;�!�8�\n��s&l�\"*�FB%\r'���p����%��]�8v����r]�� ��Ok�(��6��]����c\$�o���L����XrG �!+�*��zn�Ւ�1�\\\rNZ\r\0�?�*�.�.��/�ug�\"����(n��ҏI���2���W��|��&��0S��,��F�D6�rc��.��0��'�Nsf ���fd�.!5��HIp�L�8R|�+z����,��+�2k#4n��R�2mX�\"R�]\0S,,��l���5��8�@�@��%.���l95:�N�D��R�\n��#��zq6��7\0�z��4n��l�@Qrغ0�<�2��cD�a<C3�`p�҅;�'.t.��/&��\r5CP�2�{C��:�V��DQcV�T��]GNb`O�03[�gI�F	F�>�3B�h< �3�\\\r��Gt�����hJl��\"-�o�8�<A�CH���@R��¼�3L�L�M4& ��.�޾ɰ0�~~�6ә1��]��AS��\0L3�B��B�.ң�Iv}��\nb�(2�9fo9�6�r����O��btn	�ئ������^&p&(���P���I���.kUT�)dK��\n�i��mM���]��X�j�S�Mm]X��	���mR���[KJ����j\r�x']��u���5\nMq=#F�N8ZU��X����}^U�Y��Օ�[��`|D��15�[i�[�qZ�	a�JfeH\r��!�l=R�\0�b�U�c�4X�\\7Ldg*���r�hgO>�Jr��d�e��W]G'p�Emt {@�\rU�h\"��Q �V��9c�c�\"&��7E&aˠV�������'����~:ñk �kv�����RE`Cŀ#|A\0�	��\rF�l'wn	nV�n�(@����o\$16��@�\n�S���YjV�k� ���#�cb�\n\0�\n`�G���:*����Pcf�m#f��r\$�Cb(H~1h��Z�in��^\0ZJ������#�4��-�ou(�V��ZNb�\0[y���Z��+q��m)vpהRhjF��Rc�a/���d%_rw�|��SC�C�,�V���u�g|�l�et��fK{2�hu�����h�t`����;�j���7�T#�婨cb\\nB�xX.?�I��1o�J@��Z �L�ܐ�i�jp��(�����O��@X\\\0���rsi�v���p��@��j1�t�p�2Q�L`�D�-��B8}NZ�,-�c�l�F�^\r1�z����4t�N6r�P��U�CV�\"�,�^Z\0��n�.@��\$�Ս������<�94Sw6��cd�/�x��\n��	(~\r�FF�����@7��Y9��ߔ�1�K�J��t��W��� u�21qͯ��,\r@�C�J�X[�s�e�+\0y|3@zX��D�W�.�*\0x����h�<�5h\\�Y�.h�׍��)��~���&��V�*�~�U	�*�@V�;������m��\"\"���`�h����xBW8F<XMt��1,�\$���N�PT���t�)�2סٰ\\G;qr��)�B�Aɓ��9,�}:`�\"N�v���/��QtT����R�<�D�F��J:w&�a>m\r4����>F�L\n˦=�#k��T\"!�����̒/��C���Z�`�⠘�3��s(��ݭ�@�\\rq�gdjF�,�%0B��SG��c��\r��W���40��{��P�eC�z@o�<�ᴆ3*l�}�E&����n`�`�-Z��k� ��.��!(tdX�:c\$_U\0��c�F\n��QB��3�,v\"1��D?�ը�tR�,��SD�h���dh�D h�e�/S���@\0c��1�H���č�����V-� ����ۜ4`��`\0�D���9���yg;]��v�_�F<�Cn����QDk��F��!`�'������\r�<C��]��1\0�#�tQDh/��\\�@�c�r;��Ȁ�\\fAk,�L�C/�ܠ�\0�V\\o��O�`��edE�;ۉ�\njux�\\Z��Z�A�ū���śnrc��:\ns؉:<P\nn2�d�56%^�CDX�y�����*�yN4�S��C���/yJ\\x)|.�}�A�fe{�.8K��^���'�gW��|�}6�M��۝\n�h1=m�,b��H ��R�V�{�'�����C��»2�j<O�G�N�Ń���i�5Q� ���}^q���Z�P��`V望�F�ȑP{F�	��CqZ&�P�%�@XH�7�DX ��\$c��[v�{����>� v�ݷ���堔mX�\"J��\\��r6v(N�y��8'}z�s��c��[�j;:\"����x��a�[����*<h��iP����7I��ԟR\"B�����6�LJ��:Aͦ��O��ӿ���u�^S�Πۛ;�s�#���\$}qh&���4\r�9C�Q6\n���S���Wn�ȓ�\$�t�r\r���§�Gy��ϙ	��M�����\$�<XXC�Zr`t XnO�گ?Ns�\"��L�,�0i�\n�S\nE\0�CÒ�_/Ϡ���@m)+�ꈠ�R����0�_��}�n����K�OC���bi�ZU��e�]�+�P�x{P�[���V+_��W�#h�.��ӒMG휀��n!�ς�蜀�K1]\$\0F�@��8%C[s�V\r�\0rK�To�=��[d}q�9�\0b��(̀�\0�>�,X�\rs����:��:�;��|���J^2``�4m0	����ш!��1�-#�`��6�#�ҍ�b�@I<��5��\$�B¯�KP��9=ʍ%�w��P<:-+��8�������3�7�,X�F\"���\r��;uŔq=���@�\rC���!�5T�o�Ǫ�\r��	��C*�w���#,'�@ eP�ϬcXO���g?hu��e��3'�\$QV���@��`h|�����PI�z;��6I���Q�d=>��UN���\$���{N%���j:vR����+��J;\$�@\$&���ɱ\0�֦�T���Y(}HJ��P�l�����Ԃ��3��0CeC']0��:@�o`g����}.:�8���*g��Aȵ�)O=����P�q����0�V���艰=ıY���!��� �x���Ţ0Ah�AYT���2�'��{)�@�D�@�p�1OdT@��C���&A�\rR���R\"ģ{s\\�)H�3��,\$n�D�8��}�B҈�Xwx�(�'i1��\0�+��E�,I��Ybap��\0�p�i�4�vU�dzo]:Ck���ħA1	h�V�{��");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$bd=substr($u,-1);return
str_replace($bd.$bd,$bd,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($ge,$ec=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($ge)){foreach($X
as$Sc=>$W){unset($ge[$y][$Sc]);if(is_array($W)){$ge[$y][stripslashes($Sc)]=$W;$ge[]=&$ge[$y][stripslashes($Sc)];}else$ge[$y][stripslashes($Sc)]=($ec?$W:stripslashes($W));}}}}function
bracket_escape($u,$Fa=false){static$rf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($u,($Fa?array_flip($rf):$rf));}function
h($Q){return
htmlspecialchars(str_replace("\0","",$Q),ENT_QUOTES);}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$Y,$Ra,$Yc="",$Fd="",$Ua=""){$K="<input type='checkbox' name='$D' value='".h($Y)."'".($Ra?" checked":"").($Fd?' onclick="'.h($Fd).'"':'').">";return($Yc!=""||$Ua?"<label".($Ua?" class='$Ua'":"").">$K".h($Yc)."</label>":$K);}function
optionlist($Kd,$Fe=null,$If=false){$K="";foreach($Kd
as$Sc=>$W){$Ld=array($Sc=>$W);if(is_array($W)){$K.='<optgroup label="'.h($Sc).'">';$Ld=$W;}foreach($Ld
as$y=>$X)$K.='<option'.($If||is_string($y)?' value="'.h($y).'"':'').(($If||is_string($y)?(string)$y:$X)===$Fe?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($D,$Kd,$Y="",$Ed=true){if($Ed)return"<select name='".h($D)."'".(is_string($Ed)?' onchange="'.h($Ed).'"':"").">".optionlist($Kd,$Y)."</select>";$K="";foreach($Kd
as$y=>$X)$K.="<label><input type='radio' name='".h($D)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$K;}function
select_input($Ba,$Kd,$Y="",$Xd=""){return($Kd?"<select$Ba><option value=''>$Xd".optionlist($Kd,$Y,true)."</select>":"<input$Ba value='".h($Y)."' placeholder='$Xd'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($t,$dd,$Pf=false,$Fd=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($Fd)."return !toggle('fieldset-$t');\">$dd</a></legend><div id='fieldset-$t'".($Pf?"":" class='hidden'").">\n";}function
bold($Na,$Ua=""){return($Na?" class='active $Ua'":($Ua?" class='$Ua'":""));}function
odd($K=' class="odd"'){static$s=0;if(!$K)$s=-1;return($s++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$fc=true;if($fc)echo"{";if($y!=""){echo($fc?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$fc=false;}else{echo"\n}\n";$fc=true;}}function
ini_bool($Mc){$X=ini_get($Mc);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($Q){global$h;return$h->quote($Q);}function
get_vals($I,$e=0){global$h;$K=array();$J=$h->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$e];}return$K;}function
get_key_vals($I,$i=null,$jf=0){global$h;if(!is_object($i))$i=$h;$K=array();$i->timeout=$jf;$J=$i->query($I);$i->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$i=null,$n="<p class='error'>"){global$h;$db=(is_object($i)?$i:$h);$K=array();$J=$db->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($i)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$K;}function
unique_array($L,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$K=array();foreach($v["columns"]as$y){if(!isset($L[$y]))continue
2;$K[$y]=$L[$y];}return$K;}}}function
where($Z,$p=array()){global$x;$K=array();$rc='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$e=(preg_match($rc,$y)?$y:idf_escape($y));$K[]=$e.(($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$x=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($p[$y],q($X)));if($x=="sql"&&preg_match("~[^ -@]~",$X))$K[]="$e = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$y)$K[]=(preg_match($rc,$y)?$y:idf_escape($y))." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$p=array()){parse_str($X,$Qa);remove_slashes(array(&$Qa));return
where($Qa,$p);}function
where_link($s,$e,$Y,$Hd="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Hd:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$N=array()){$K="";foreach($f
as$y=>$X){if($N&&!in_array(idf_escape($y),$N))continue;$ya=convert_field($p[$y]);if($ya)$K.=", $ya AS ".idf_escape($y);}return$K;}function
cookie($D,$Y,$gd=2592000){global$aa;$G=array($D,(preg_match("~\n~",$Y)?"":$Y),($gd?time()+$gd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;return
call_user_func_array('setcookie',$G);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Lf,$O,$V,$m=null){global$zb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($zb))."|username|".($m!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($Lf!="server"||$O!=""?urlencode($Lf)."=".urlencode($O)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($hd,$rd=null){if($rd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($hd!==null?$hd:$_SERVER["REQUEST_URI"]))][]=$rd;}if($hd!==null){if($hd=="")$hd=".";header("Location: $hd");exit;}}function
query_redirect($I,$hd,$rd,$pe=true,$Tb=true,$Yb=false){global$h,$n,$b;$if="";if($Tb){$Qe=microtime(true);$Yb=!$h->query($I);$if="; -- ".format_time($Qe,microtime(true));}$Oe="";if($I)$Oe=$b->messageQuery($I.$if);if($Yb){$n=error().$Oe;return
false;}if($pe)redirect($hd,$rd.$Oe);return
true;}function
queries($I=null){global$h;static$je=array();if($I===null)return
implode("\n",$je);$Qe=microtime(true);$K=$h->query($I);$je[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I)."; -- ".format_time($Qe,microtime(true));return$K;}function
apply_queries($I,$T,$Pb='table'){foreach($T
as$R){if(!queries("$I ".$Pb($R)))return
false;}return
true;}function
queries_redirect($hd,$rd,$pe){return
query_redirect(queries(),$hd,$rd,$pe,false,!$pe);}function
format_time($Qe,$Kb){return
lang(1,max(0,$Kb-$Qe));}function
remove_from_uri($Rd=""){return
substr(preg_replace("~(?<=[?&])($Rd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$kb){return" ".($F==$kb?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($y,$nb=false){$bc=$_FILES[$y];if(!$bc)return
null;foreach($bc
as$y=>$X)$bc[$y]=(array)$X;$K='';foreach($bc["error"]as$y=>$n){if($n)return$n;$D=$bc["name"][$y];$pf=$bc["tmp_name"][$y];$fb=file_get_contents($nb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$pf":$pf);if($nb){$Qe=substr($fb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Qe,$qe))$fb=iconv("utf-16","utf-8",$fb);elseif($Qe=="\xEF\xBB\xBF")$fb=substr($fb,3);$K.=$fb."\n\n";}else$K.=$fb;}return$K;}function
upload_error($n){$od=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($od?" ".lang(3,$od):""):lang(4));}function
repeat_pattern($Vd,$ed){return
str_repeat("$Vd{0,65535}",$ed/65535)."$Vd{0,".($ed%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$ed=80,$We=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$ed).")($)?)u",$Q,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$ed).")($)?)",$Q,$A);return
h($A[1]).$We.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($ge,$Gc=array()){while(list($y,$X)=each($ge)){if(is_array($X)){foreach($X
as$Sc=>$W)$ge[$y."[$Sc]"]=$W;}elseif(!in_array($y,$Gc))echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Zb=false){$K=table_status($R,$Zb);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$kc){foreach($kc["source"]as$X)$K[$X][]=$kc;}return$K;}function
enum_input($U,$Ba,$o,$Y,$Jb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$B);$K=($Jb!==null?"<label><input type='$U'$Ba value='$Jb'".((is_array($Y)?in_array($Jb,$Y):$Y===0)?" checked":"")."><i>".lang(5)."</i></label>":"");foreach($B[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ra=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$K.=" <label><input type='$U'$Ba value='".($s+1)."'".($Ra?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$K;}function
input($o,$Y,$q){global$h,$yf,$b,$x;$D=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$q){$wa=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$wa[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$wa);$q="json";}$ue=($x=="mssql"&&$o["auto_increment"]);if($ue&&!$_POST["save"])$q=null;$sc=(isset($_GET["select"])||$ue?array("orig"=>lang(6)):array())+$b->editFunctions($o);$Ba=" name='fields[$D]'";if($o["type"]=="enum")echo
nbsp($sc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ba,$Y);else{$fc=0;foreach($sc
as$y=>$X){if($y===""||!$X)break;$fc++;}$Ed=($fc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($fc > f.selectedIndex) f.selectedIndex = $fc;\" onkeyup='keyupChange.call(this);'":"");$Ba.=$Ed;$xc=(in_array($q,$sc)||isset($sc[$q]));echo(count($sc)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($sc,$q===null||$xc?$q:"")."</select>":nbsp(reset($sc))).'<td>';$Oc=$b->editInput($_GET["edit"],$o,$Ba,$Y);if($Oc!="")echo$Oc;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$B);foreach($B[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ra=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$s]' value='".(1<<$s)."'".($Ra?' checked':'')."$Ed>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Ed>";elseif(($ff=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($ff&&$x!="sqlite")$Ba.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$Ba.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$Ba>".h($Y).'</textarea>';}elseif($q=="json")echo"<textarea$Ba cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$qd=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$A)?((preg_match("~binary~",$o["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$o["unsigned"]?1:0)):($yf[$o["type"]]?$yf[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$h->server_info>=5.6&&preg_match('~time~',$o["type"]))$qd+=7;echo"<input".((!$xc||$q==="")&&preg_match('~(?<!o)int~',$o["type"])?" type='number'":"")." value='".h($Y)."'".($qd?" maxlength='$qd'":"").(preg_match('~char|binary~',$o["type"])&&$qd>20?" size='40'":"")."$Ba>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$q=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($q=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($q=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($q=="json"){$q="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$bc=get_file("fields-$u");if(!is_string($bc))return
false;return
q($bc);}return$b->processInput($o,$Y,$q);}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$nc=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$h->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$nc){echo"<ul>\n";$nc=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($nc?"</ul>":"<p class='message'>".lang(7))."\n";}function
dump_headers($Ec,$wd=false){global$b;$K=$b->dumpHeaders($Ec,$wd);$Pd=$_POST["output"];if($Pd!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Ec).".$K".($Pd!="file"&&!preg_match('~[^0-9a-z]~',$Pd)?".$Pd":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($q,$e){return($q?($q=="unixepoch"?"DATETIME($e, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$e)"):$e);}function
password_file($ib){$vb=ini_get("upload_tmp_dir");if(!$vb){if(function_exists('sys_get_temp_dir'))$vb=sys_get_temp_dir();else{$cc=@tempnam("","");if(!$cc)return
false;$vb=dirname($cc);unlink($cc);}}$cc="$vb/adminer.key";$K=@file_get_contents($cc);if($K||!$ib)return$K;$pc=@fopen($cc,"w");if($pc){$K=rand_string();fwrite($pc,$K);fclose($pc);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$gf){global$b,$aa;if(is_array($X)){$K="";foreach($X
as$Sc=>$W)$K.="<tr>".($X!=array_values($X)?"<th>".h($Sc):"")."<td>".select_value($W,$_,$o,$gf);return"<table cellspacing='0'>$K</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($he=is_url($X))$_=($he=="http"&&$aa?$X:"$he://www.adminer.org/redirect/?url=".urlencode($X));}$K=$b->editVal($X,$o);if($K!==null){if($K==="")$K="&nbsp;";elseif($gf!=""&&is_shortable($o)&&is_utf8($K))$K=shorten_utf8($K,max(0,+$gf));else$K=h($K);}return$b->selectVal($K,$_,$o,$X);}function
is_mail($Gb){$za='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Vd="$za+(\\.$za+)*@($xb?\\.)+$xb";return
is_string($Gb)&&preg_match("(^$Vd(,\\s*$Vd)*\$)i",$Gb);}function
is_url($Q){$xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($xb?\\.)+$xb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$A)?strtolower($A[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$o["type"]);}function
count_rows($R,$Z,$Qc,$r){global$x;$I=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Qc&&($x=="sql"||count($r)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$r).")$I":"SELECT COUNT(*)".($Qc?" FROM (SELECT 1$I$tc) x":$I));}function
slow_query($I){global$b,$qf;$m=$b->database();$jf=$b->queryTimeout();if(support("kill")&&is_object($i=connect())&&($m==""||$i->select_db($m))){$Xc=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$qf,'&kill=',$Xc,'\');
}, ',1000*$jf,');
</script>
';}else$i=null;ob_flush();flush();$K=@get_key_vals($I,$i,$jf);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$me=rand(1,1e6);return($me^$_SESSION["token"]).":$me";}function
verify_token(){list($qf,$me)=explode(":",$_POST["token"]);return($me^$_SESSION["token"])==$qf;}function
lzw_decompress($Ka){$ub=256;$La=8;$Wa=array();$we=0;$xe=0;for($s=0;$s<strlen($Ka);$s++){$we=($we<<8)+ord($Ka[$s]);$xe+=8;if($xe>=$La){$xe-=$La;$Wa[]=$we>>$xe;$we&=(1<<$xe)-1;$ub++;if($ub>>$La)$La++;}}$tb=range("\0","\xFF");$K="";foreach($Wa
as$s=>$Va){$Fb=$tb[$Va];if(!isset($Fb))$Fb=$Tf.$Tf[0];$K.=$Fb;if($s)$tb[]=$Tf.$Fb[0];$Tf=$Fb;}return$K;}function
on_help($ab,$Le=0){return" onmouseover='helpMouseover(this, event, ".h($ab).", $Le);' onmouseout='helpMouseout(this, event);'";}global$b,$h,$zb,$Db,$Mb,$n,$sc,$uc,$aa,$Nc,$x,$ba,$ad,$Dd,$Wd,$Te,$yc,$qf,$tf,$yf,$Ef,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$G=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;call_user_func_array('session_set_cookie_params',$G);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$ec);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$ad=array('en'=>'English','ar'=>'العربية','bn'=>'বাংলা','ca'=>'Català','cs'=>'Čeština','de'=>'Deutsch','es'=>'Español','et'=>'Eesti','fa'=>'فارسی','fr'=>'Français','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'日本語','ko'=>'한국어','lt'=>'Lietuvių','nl'=>'Nederlands','pl'=>'Polski','pt'=>'Português','pt-br'=>'Português (Brazil)','ro'=>'Limba Română','ru'=>'Русский язык','sk'=>'Slovenčina','sl'=>'Slovenski','sr'=>'Српски','ta'=>'த‌மிழ்','th'=>'ภาษาไทย','tr'=>'Türkçe','uk'=>'Українська','zh'=>'简体中文','zh-tw'=>'繁體中文',);function
get_lang(){global$ba;return$ba;}function
lang($u,$Ad=null){if(is_string($u)){$Zd=array_search($u,get_translations("en"));if($Zd!==false)$u=$Zd;}global$ba,$tf;$sf=($tf[$u]?$tf[$u]:$u);if(is_array($sf)){$Zd=($Ad==1?0:($ba=='cs'||$ba=='sk'?($Ad&&$Ad<5?1:2):($ba=='fr'?(!$Ad?0:1):($ba=='pl'?($Ad%10>1&&$Ad%10<5&&$Ad/10%10!=1?1:2):($ba=='sl'?($Ad%100==1?0:($Ad%100==2?1:($Ad%100==3||$Ad%100==4?2:3))):($ba=='lt'?($Ad%10==1&&$Ad%100!=11?0:($Ad%10>1&&$Ad/10%10!=1?1:2)):($ba=='ru'||$ba=='sr'||$ba=='uk'?($Ad%10==1&&$Ad%100!=11?0:($Ad%10>1&&$Ad%10<5&&$Ad/10%10!=1?1:2)):1)))))));$sf=$sf[$Zd];}$wa=func_get_args();array_shift($wa);$mc=str_replace("%d","%s",$sf);if($mc!=$sf)$wa[0]=number_format($Ad,0,".",lang(8));return
vsprintf($mc,$wa);}function
switch_lang(){global$ba,$ad;echo"<form action='' method='post'>\n<div id='lang'>",lang(9).": ".html_select("lang",$ad,$ba,"this.form.submit();")," <input type='submit' value='".lang(10)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ba="en";if(isset($ad[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ba=$_COOKIE["adminer_lang"];}elseif(isset($ad[$_SESSION["lang"]]))$ba=$_SESSION["lang"];else{$pa=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$B,PREG_SET_ORDER);foreach($B
as$A)$pa[$A[1]]=(isset($A[3])?$A[3]:1);arsort($pa);foreach($pa
as$y=>$ie){if(isset($ad[$y])){$ba=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($pa[$y])&&isset($ad[$y])){$ba=$y;break;}}}$tf=&$_SESSION["translations"];if($_SESSION["translations_version"]!=3088235766){$tf=array();$_SESSION["translations_version"]=3088235766;}function
get_translations($Zc){switch($Zc){case"en":$g="A9D�y�@s:�G�(�ff�����	��:�S���a2\"1�..L'�I��m�#�s,�K��OP#I�@%9��i4�o2ύ���,9�%Si��y�F�9�(l�GH�\\�(��q��a3�bG;�B.a�F�&�t�: T��s4�'�\n�P:Y�fS���p��e�,��D0�dF�	�[r)�+v��\n�a9V	�S�޴k̦�n�cj��ADS!�2rɜ���QB�s����}t���m�jl{�a2��j�2Bb<�A\"_?�2y���BA��H3�\rAE3.��4K`�;�H���\0��B��/��ʋ��Z�\$�P�97���1\rC,*\$�� ��#�ލ���<�t.0��\0м����s֐���L�F�\r��Z�)c�\$	К&�B��c̴<��������\n)�#B0�CcU	R3�&:�,��4�\"�)̰�5��pA��H�&�h7%��9 ��1�#��:��C�9��\"8@@�*1��\"ɭ5J�2J�8\r(�������D3�iD�;O\0�Y;�L��%J�)Z�<V�\$cB3����^��\\�Ak��+C8^�]c�\n�աxD�6��l���5�A𒪢�`��|����7��ӵ@<jk09;K얰�L#\rN���/��TBj\n@�����|(JD��S�L���BT�%ɀ���y���,&2'�}(��YB�n�1�P�7�C��	☨L�%)&��1Cl)��ڒ���ƾ\$�p��ջc4�2P,��؍���B��C=(��#;X�\0�*ekbB��#���\$��`�M��|¦�}\$l�iUBOIGB9���r��v8���\n2%\$����p4��)u���\"�|��D�ޕM40��߸�r���g���~�3��3G�ļ�@����T��/'K��rH��3|UH���D���2;����j�`+i�1��@��u\r�Ԍ0�C0yb&4�*B�g` \n�P#�pS�l-���<P�x�4	I.a�<�;�u��:�&��<L���3�S�\n�%JG�� lo(TK�^;�z=@�!�{j��\\SIxA)��Ex�Hc;4m(��C�ng� o'�&�\$�	�\ndx��5��iU�������IdU&x*D�шq���Ǣ ���\0O	h��#(JL�r��ʠ\\";break;case"ar":$g="�C�P���l*�\r�,&\n�A���(J.��0T2]6QM��O�!b�#e�\\ɥ�\$�\\\nl+[\n�d�k4�O��&�ղ���Q)̅7lI���E\$�ʑ��m_7�Td������Q�%F����PEdJ�]�MŖiE�t�T�'템9sBGeHh\\�m(A��L6#%9�Q�JXd:&��hC�aΡR�Pcչ�z����n�<*���̡g\n9��%��h5ut.���QS��\n��Ķp{���l-\n��;�D��\n��n����I���f��g��gxu���l§�R�\"er�������1��Jpá����^��!P��nX�2��p���^qXb�C��V��)dE+.�NC?����	�u\r�\"�2m�~�?�����e{6�!���1H;�z�\\���4������ƪ!R�2os\n�?��8�����s��7��\$	К&�B��\rCP^6��x�0҃�	�e���\$q���C���7\r2�A0 ���vb��#��5��r	R���S�����\"�+��>�l�(�!�\0�!����.�m\0�����%�<��Ų�'�l����C�7C��e��ˬ��Y2�\0\$U[���^Z@itm�XۂA�\"n&�#��2�A\0኎c��9C�(�8\r#��2X!��\r0��C@�:�^���\\0��h�7cv>3��Ί<b�p�4��p^��9�(���0��XD	#h�6�mr:�x�4��:\r|::\r�p�\\H�cn��ݨkl��I\nF��j�0����!C��8?(j&���ҭ��-b��	B�6˪N��W��~�K:�(�B����*ë�D���7��j[�ţx�x�*!h�8��+�C`��,<���ꊂ'I���<�?}��[���咯S?��)�nS��f�@���#x�z�@[og���� ��\0S\n!0`��\0v\r,�#@�r\r-�����C�o\r�m�f��^�:՝D,,J��-���8Z�I\$1N�L���@+\n(����bNp�-�ĺ�%�uI��L�0�`@���r\r0I�5P��[�\0�����b�RkA��\n��.�%���b�Q�ag6����Y�g'�9�T�u �%���|Iʘ\"k���#Aܬ4O�%��VP��r\r��1����X i���C,`m��4�`��C�7�>X���Ł\0b�,�P��h8\n�1�@�ʃ���8�U|I^�.'��I'��,p�\\��T}�b�IO�r蚁�PM���:��@����'�O�S3VY�0�СC�-�\0\"0���5��a b�s�y�Z�'����덹W=�&@ � @U%�a����Ԑ��2�\\����]^j:1x)�V�ظd��PW#�-\rO}z��S#0*�r8I�4��fj�N�����jÉX�";break;case"bn":$g="�S)\nt]\0_� 	XD)L��@�4l5���BQp�� 9��\n��\0��,��h�SE�0�b�a%�. �H�\0��.b��2n��D�e*�D��M���,OJÐ��v����х\$:IK��g5U4�L�	Nd!u>�&������a\\�@'Jx��S���4�zZز�S��H�MS���]�O��E2��\\�J1��|�Ц[�i�L��_?�P��\n~b¨�#�m\r/����t7�B�'��C��]��sl����2G��Զ�抍��^TȘs����<\neU>���c��U�>ݣ�����S �L^>�#�²�4\nپjR������h���\r�*������O�~�1��d�+�*\\׬l���=�{��&�K^W2Kb���,.�*{ S�J��*�\"�d%ɯQQ�h\nϷ\r*\0�ʐ# H\"62:O�>��d¼Cq���1r#*B7\r�PH� iB�,k=/��{n������(��_\rA�{�K��\0��m���\$^���\n�/��q]`���j��-Œ�)G��\nLM�O�3���r��cK�D�ȥ�a@�sZ� ��r���Y~�њ�iӋ�R�o3����l�U�&Y�\nrZ-}м+�]�<����3�3�S1�x�\$Bh�\nb�:�h\\-�X��.Ņ5x�GЕU9�t�j�`P�:T̎ڵм�o 	cրX����B�b��#4�|�)�3*��^Q߷=���2�r�G\$�l�MCj�:�\rw�,��씤�J,��B�>�<E��\"q3/�JZ�\r2�u�vD�L�o�qo���r�oug\n�������ҟ\\	V�;H�6�ڔ<\0�0�c��9�X9��x�6���4�C(���\r���C@�:�^���\\0��h�7u�wl3��(��p�9�#���9�(����0��XD	#h�6�o��/ ���0@���h\r�:�CXe�:;^_��.� ߠ6蝎Yn)G=�#�訔��\n (5�NaT�)���(F`Ar_�ѫ�V��	2E��-�����aF��� ��*,����J��?%�\rse�-�����^���ڙctd��T4�d蛃2@���\$�/�<�O�_(	�Ԡ�@xS\n�:B��L�I�lH�<����L�h�k��,� +x)E�	%�f���Jd�<����D�rm����A\0c~��:�����A�3�\0�B` ���\0�^F\n���&�������(9��Hxv{+	&C�i:] �|�v��\\?OK\r�0�Ș�f(��@��f�Q�^����I����tO��TV�y2QR�%��\$�lѝ�)���动T0q�6�iby1��\\��8��v!�4����`4\r���2\\�C@i�!��X6ۣ�Ο�Q�V��ͩ�����D���<F�6y*��Dd�j�:^��=N<RZ�6�&�jy����+E��E��O[)~w��S�I�	���Zmg�p����P�6���(�(!�\0�\n�l\r!�5��0fpa\r��	S���Hf0M�\0��3 �m��(\$��\0U\n���@���\r����xCS�'!+ވ'�s���RQR�7��d(1Em��G�MS�]X����*&Xn��E\n�ݣ��n͎\\,��5\\�Y\\�)v�Z��m��P����فK�����DGx���p������*�T���\"�C�L\\��D�#T,����(�e�D�n���pH�,#j���r\"F�[���/�%h���h%O_Rֹ7��d��w�h��X/e+�T�l�� ()�W��pd�����Z�ۯ>Wg���^�S���\\�-3���J�'!��xr�a�t�y_��";break;case"ca":$g="E9�j���e3�NC�P�\\33A�D�i��s9�LF�(��d5M�C	�@e6Ɠ���r����d�`g�I�hp��L�9��Q*�K��5L� ��S,�W-��\r��<�e4�&&#��o9L�q��\n'W\r��hc0�C���1D̆�|�U:M��фS�`���X :�qgLnb� �� �S���n����R�I����CM~�1*N-t�'�d����r���� ��h�c�q�?\$�lႋS�8�eN��q3_9���3���m�p|+H(���`���8�7\r#Қ/�2���e��0H@�I��ӎ�(ꓣ�F���\0�<��HK��3�<�*��xH���엯\0Rh8�Cb;\r�H�6\r�'�J2ڙejm\n�#�h��H���B�@�1�fe\0HB �(�ꊴțP���Ȑ\$PT�p���:����C��,Cܻ/�!p)�C�>N�e\0PR���KR��/L\rll91�@�	�ht)�`P�2�h��c\rd0����93��9N�#�1t�	ˌp�7�m8@!�b���N�2��93����	R�6��cbXКyR�E���iLp��lJ�B	�P���➃��<���=����P���n&���\0�c�[	�����H�܂�������k��\$Ã�9��D;��c-�������D4����x��m	�@���cJӵ#p^/i(��gB�7G\ra|�2�,4:�x�5����C�jj0ٮt�|�Х༫�3Q�K�����B��:�\n@��\r�� �B��\r�-\0#c*cFOy\\z�\\*��㣩�@�>\nz�����1�h��\"g	]p���)��4G���h3�\rE�)fC��4M +�ga�B�\"��˃H좣�2V��yf�&\"���x��\r��=-A\0�(��B8R!\0�*qtt:O\\rt�9T�	{�Q���@o��c�Nu.#����n��=���\"�/P��C�{s~.e�����Z�	�|��b:V�yiN�q��V�����/e�2���X�I��̉b�B�L0�p��TI9�R��RA�8��P���z�`�9\r�������,Qj5�F��T�p�(QOgH�y�\r��1������H������@&!�:S\$��-��*�@�A�|PF+�6\$EKD!Rp�ڞ75˲���<��YJ1l\\�������@��\0��#�ʪ(a�Ӥd*��=1@�s5�`'4��0�1N|b��A�6G��W����_�98Rʀ�>�Id�&����%��DR؄JӐzOht4h�Pr�OHSS&�2d���(x�'�TB��\n+�Y�6b��W(\n����Zt�o�";break;case"cs":$g="O8�'c!�~\n��fa�N2�\r�C2i6�Q��h90�'Hi��b7����i��i6ȍ���A;͆Y��@v2�\r&�y�Hs�JGQ�8%9��e:L�:e2���Zt�\"=&��Q����ئ��*�EjT����k<��\0�Q��y5��Ǔ�\n(��Sl�L�_MGH�:�L=(����kT*uS���i��AE\\���a�f���y8ALDd��l0����4� b#L0�*`�tb&�F3((�i�����QNj�R���Sy��r4�JfS�xۺ\"�\r'IN�[�؂�]���\r#@ؑo�6\n��_�+2/\$F)B�-bs<�1�� 5�!(�C&��D�Đ�Bɬ�P�7?�s��pHF��<�C*(Íc ʢ(C��2���É���#[���`�h�0�\0P�!i�����|6�,8�\r2,<�L�Cx��K����#`@�������,�.\r�p!O#��0@e�ED���/4<�O����R40��l��G�B@t&��Ц)�C \\6����Y�B�+\$���6������0+�h^�Cx֞�)�pA:�I�(�HڻB\$�@��êWaѰ�(� #x���H���\"�x�sH�\n7��l�M��Ao�)��a��\"p�B�J��_s���WS�&���h��]�+r�őe6���BL��1���]\"�P�e(�&6;;cB44N�>&���\r�8�\0�3��:��t�㾬ICk�`��H��c�^���v\"�K��9�~�/�N\0�5�A�6�#+�7��(�}��蚘�c�d��4�&C*V���=BN�3u��X@2g#��2�R̢C\"\$�5�X�4��(�2V���@*JWDOPt��96����%\ng��iݖ�x�Rt����'	[yЎi\\�1\r0�~����'�b�>�h�\0���V�t�������7����Hg�代��t5�A�'��\0S\n!0��r�K9�9�p�D�hof�#GhqɃ�>������ǖ	@)ox��6q�y8��-���ьD5��\0���a(A���\"�C�B\"~�	�@\n����((K� ^���� �V�o+⅞t���.\$���6��]��UM�>=Cd��pk��69�L��xi5a�F�D0��\\{\$�\nI>�����=J�=�d��r�\\e��(g�������A��B{C	��^Nʦ\0�%l��*�5z\\�(r�M��<�I��(�b\$,R�΢�K�73G�+f,��ch,�\0vO��*�@�AÿO ���V����\n�K�;C��QҲQ��ܥ^��Ou|f\"\$L��r2F���Wػ/p��rOc�mѝ��sN��d���Ӎ�D�X�����1��֙28D�ᙤ�t:5z���e(����G�l��V���G%���.d!�4��LbN�<՚��i�@k2q�~��^�����FQ��K�\0��]L=G�I�QB�H�z.�T����b�*`ۇ\0";break;case"de":$g="S4����@s4��S��~\n��fh8(�o�&C)�@v7ǈ���� 3M�9��0�M��Q4�x4�L&�24u1ID9)��ra��g81��t	Nd)�M=�S�0ʁ�h:M\r�X`(�r�@g`�\\��*LFSe�f\n�g��e��S���n3�M'J�: �Cjس��R\\��C�v�\$��k'J�ʡ/4Hf�,�-��:ZS+�2���m�\"Ԙ鹓_�Ƴ.3pB��ԇ Q;�z;�\r`�9��m��0�t��\n\"�1f���9e(igg�o3�A_���+�c���b��\rÚH=\"�<��HKB	p<��p���\\��b��P����ģ,Ðȷ������@ �m\"B*��:�1��\"����6B�v����3Ȳ��x�F�p��1\0�15K���i�0����#rBH�3���1M�Tİ�CS��@t&��Ц)�K�cU5��5����7�8�&�H`���\0؎<��)�\0�7�a3��ڌ���+a\0��\r��5Rp��N�lƚT+��W����7��r�� -^Ǎ���ǌ1��;6�:�j1q��9��\n��k�Ԕ��c2ű���b#uER&��X��h@ �VT�\$��x�GQ�h�)�0��R�d�<L�2V���\rp��K\0�8Ax^;�r66�(`\\��z;�2���@:#�Z:d��č9a|\$�����\ràx�!�;<�R���x@�9�2�]�ϋnb���š��<����R�-�s!0�(���+�\n@��~��B��Jz>�\r��W)�p�'��Ԡ�� �ݧ���!�(A+.{��9ɝkz ��-��Z�(	☨�\$��(�z�Z\nC-�=4�z\\ �:��)��O�^��{ ��H\n�毱#����C8�᩠�7��\0�|��pލ�W�΂\n\"bP��2�c�*�@�M?͌3#�����3���B�RMB|G�(��d�d`�������IjUJ��a�B���kG���2\0§�l��p4����u��5���ˑcZ�\0��b�[�0�\r� b��K�p<�N�^�LQ#�N�\"�H�&\r�Q+%���IJ�7	� �`�s	�sI��(��hla���@a���Ǒ���M1.&�\0005�*T��T*`Z	�ng\n/D��9��'	O�������U+\n��R���7�\\QAc%���`�l���&\"�\ny\$i���?q�#�=�C�!��==F��HҶS\$y\\�Ju�\0�����=H�����{4D(5�C\n�g�r�Ν�\\Ck~%���5:X�%��6pXĸIǝ�J��9b�%!rj`B��)u0n�%�T��\$/^�";break;case"es":$g="E9�j��g:����P�\\33AAD�x��s\r�3I��eM�����rI�f�I��.&�\rc6��(��A*�K�с)̅0 ��rة�*e��L�q��ga����y��g�M�:}D�e7\$��	�` L��|�U9��E\n��a�J�a��aO��lX�g7G\r�踂�H�Pb��E@�R�\r1����V4�\"�H��\ns:��:ɴ�\n9���Y^ � 4WL ��}��5�x(�e2��[���ra�xd���rE��+�}�˚C���Y�l�`7t�'#\$�@c���~ؙ�ʡ9��!� @1+8��B�܏(�����^p�b�2k��4�e���\r�R��н;�h�:B��/����C�\"��J�\"��`7<Q��9 �Ђ2\rL3��ðҽA��z�-����p0�+�̦�-�P��@P�\$Bh�\nb�2�x�6����=�\"�+3��4�O��\"-\rK�6:�P���MTt&=�x�\n�xִ�)����mP\\\n���;1�)�b6Č2{2��2�6��c��\nkRΧrxH8���@�0�Q�^�1�b0�2L��G���8\r/��#+����R:.�6�;\$P��%ɂ��KN1�0�'Q�%��	�jΔh�;����pI%N1D�3��:��t��D8�s(9����c�[!xD�\$�;����`�5�A𒑣��|�#\r�����@�Si茶�)\"&��0��!l�j����[�f��\n@����\"L��B��h��hҪ�*n �\"Xzzt�1U���c���S�1��N�%:�0��Ϥ&��)���M[���H�}S�� �=_�nh�&Ȫ+�s���-��Vl�;N�?Q�E�B�,��l(�Y8�L����&/��A-0������K�6���n�@.�֤K\rL� ��p7�wܶ��\r�QbJ��R7��~#��g��iI둲`�[^\0�������6#\r8:����Y�f�\0�s�}Q�.\$����W��r���Ղ����p��u�|Gj\r�%DvK;�!��?��Ԓ���qU2\0�u�`+j1�\0Ē��VL ����IՑ0�y��6��� \n�P#�pE�q�.e\\�%X&��3r��\0�R0H�T],�\rr��\0�H�3mG�ߖ�_��)̋�DJW�A9�1-�e�GAU|�B@�\$�^\$�X@�Fch I	B�f�֌/d�2��	�\nR��M ��e�h��FAB�<7) �(�V~և������::�<������B0r��59'�i1Z}��\$w�A�L�";break;case"et":$g="K0���a�� 5�M�C)�~\n��fa�F0�M��\ry9�&!��\n2�IIن��cf�p(�a5��3#t����ΧS��%9�����p���N�S\$��4AF��\n��EC	�O����T,̰ی�t0��#��v�GW����2e�ю�S��K�\rGS�@e��q�:�k\0�^\rF��<b4�D㩴�]���43�\rHe;d�Ƹl��e3���H(�`0��Eiy�� ON�z�R\n#�M�ۙһy&f��R�pt�]t&�MZ����@Q0�_��fPQ+l���X@�!�c��7cH�5?�*ʪ@LB<��P�7�A l��@�Bx�C��4�*V��B��Ō���4�KȨ�7\n3gB(Z����z����ʙ!1���1��l0��3d)�c\"�,\$�j��AL�tAɨ܏#�P�\$Bh�\nb����p�<�Ⱥ�l�2;�(��F1�����8��cG��@���\0�)�B0X�/���:Z�\r��(�)��F�ce\0�)xܞ��2j)����� ㄗ �e&�����\\u�޿Ya~3���68S�]QTíP��#*j\"��Z�93:\rg!n�ܛ�c�9d����<R�,4\\�0z0����x�%`9������ō����A�9TC��/�I�5�A�6�+�7��^0��\"��@ރ�p��ITkI��e��)�k4�#B�T:��E��ſD[c��(h�K(�\n@R����&�%��.��k��m𽍋�*�܈X�l1�О)��l��%4�����ҙ0���ڴdY�[�%Ɇ�i;�R�%C@��r�蚋#}*1ʕ6R7��t(���&24��a\0�*k��@�%c���ϕJ�鱫>�.�\r`�����[B���zu�h��l��2�j:�|b�nI��-F/�1?���:�GT\r\r�*+��ݪ\"�C�pKF-��YH*�&Jƥ�&�L��2G���2�	:EK7� ���E�f8�\r��JA4��6��j5)�2��m������c�Xk&dp���\n\n[���5\n3��B�F��ˆ����Pg&���Sƙ9]KDԲb6�	��'�\\ʽ�E�l`��>��OQR�P��������ʫ�	Zx�NK�둰���F�O�eE���Ã	�=Q\$�0�2J�)�e�	Ƥtm�A3K�M�%cT�(c1f�%�喐I�e+Q��TJ����Z�@S*@Oc,��)������%ᤄ�";break;case"fa":$g="�B����6P텛aT�F6��(J.��0Se�SěaQ\n��\$6�Ma+X�QP��d�BBP�(d:x��2�[\"S�Pm�\\�KICR)CfkIEN#�y�岈l++�)�Ic6�d\$B�!Z�-��~䌄�,V}�'!�����l���UUiZ�B@��qA���S�p��2�Q�B����B�#�S���T�Q:�HT�k���N!([��+����{�r ��0�J�@�`4��̖��Zl�I���㯕��ϸ����Z����m��aR�#Mg��V��v����J��9i�:A�Pl9�:��,i��-%L��+�^�\"�\"R�B�HK0��#*87\r�PH�� g��IX�,*�:��.LnS��\n�U\$�AR�1�B��H�.��0S���L;X��%B:θ-Q�Ȑ��*�P�4Sx��r�d�ܬ�� 9Hj�BC�{rB�)��\$��_D��@�K<��2���dB	@t&��Ц)�B��Q�\"�Z6��h�28j��,H�{9�b҆�O�[\\�M\\5�RH�!�rK&�L��,�(���5��p@!�b����-��@���T��9YB��R�l���uY.\"f��K+�.ĩ�䙱�t��\"l\r֨��s8�]J����Z�'��c�vJF��\"�H��S��X)�J�*+����t�aBh�9��(�x�;��<2���9�%�!\0Ѡ��D4����x海��6�#vdg#8_j���b7cH�7�@:#��2��P�1\r��5�A�6�`�6ڣ�x�!�9�\0�4\r���7�#\r�\r#�i�\r��Kl�,�,��T�7g<�3�!Nm!cI�����4��P��),��/�A�&\$J�� ��6�P+�D����4�n=\"�X؊���C(�(Yi����=�CF���e��Z�867Ʊ|�j��~������(����\$�d�;�/��K,�4�2�ML)XR/�����è m�V�ڰ h��4�p@L�4��@�KE�P(B ܇�K|g.Y�°��ifA٭�T.@\n0�Yt,DP��,k�3�sH���O'��sD��}��V�����X���9E���b  E��9�`ߛ{�q�t8@��[Xh\r1�0�@��\"Qj>�>D��w���/�*Hb\"~\r0�AN85��ZI|���b>��G�b>���H\"D\$/&��K+�D�%r��\0��la�6���g�P�0���[[�\r�44�`����жh���\0b�\rdP��h8T1�@���#dq��1��-g�=�8��yzGH�!v���k�*7<F�1��lԚ����c�v�q����Ix¤LJ�.�˗�����4��R��#:ހ,�b���5\rw�Ě��(��n	��2I�P��h\0�?6�ZCgر������y\$uNAL2����UaxG�ĜvJ���0)\$)r�Y�ۯ~�x�,:E��uR��9%�ԙ6�\\�";break;case"fr":$g="�E�1i��u9�fS���i7�(�ff�D�i��s9�LF�(��'4�M��`�H 3Lf�L0\\\n&D�I�^m0�%&y�0�M!���M%��Srd�c3����@�r���23,��i��f�<B�\n �LgSt�d��'q��eN��I�\n+N��!�@u��0��`��%�S#t�ߝTj�jMf�B9���C����0#��N7�LG((����iƌV�C4Xj�h�n4�#E&�a:���]�V�5�a`Q�\$�i�m�[�M7Ө���A���8��_f4�� �����Ͼ�b����p:��(�:�c�6���(2xƁ�HKC�4<��p���^qxb\nC*f�F�ܔ%Id:a� P�9+/��?�\0007B�%�:9H��|�\nc���#l��6�a�Z5\r��z\"��4P�Da0�#:J�;Ϊ�6��˪DP���N�K>�O%L�7:��n�MCr�(�@t&��Ц)�CP���h^-�5(�.�2��+I\"23�s�ލ����B/p��u�ʡ@\"��5�!\0�)�B2�6��B�1,Z|2�Õg>M�r�����؇����7�3�,C�Z�\0�%B5j��\$][ްE~8:5�XW7c�!t��i�PT 2��\r/�W�BY��k�+O�@;�p��茣 \\������D4����x��#���\\���|3�3p�<7�v0�S����5�A�88\$����|С0��7Ã��96\"��5Ô�&�.���vZ���i\$���{4�ihH�\$\n��8#�mf��\n�S�����9��rD�4xkrݤ��n��z䣪cR�:��?�]��;>��l���X��\0�'�b�v�\0�9/��V�##�1���vpI7xT��>\r�ao��\$��L�����W�rb�y�\"���n,�C���~}w��Q	� ��rt���y%u���L�0��x�@N�P��%�8ĈS�8��\n�o�HtOA��1T�*`���!�'�R����+Z�ZLL9qp�F����9(E�D�Y�\"�'m�ņC�Nɡ	.�p&�x[MJ`�������Ln/�h�wܓC	g/��2�%��NC�\$�E�T��:q�P�B�91O�\nBH21���9C�^��_\r��1� �_�ps|F]�C�}�.'R\"`��!81R �T��'�zy��7N&H3� k����%	K������>HK#��D�%+�ZN�ـ>\$<��ȯ�6Hi���F�d@=FDɽJd�(\"�%e���>�if���Rn��(���&C������Sx�Hr%Ű�̺8oa�V��=�3����6�ݦ���İ�#Tr�_)�U�<����L\0L������\0�";break;case"hu":$g="B4�����e7���P�\\33\r�5	��d8NF0Q8�m�C|��e6kiL � 0��CT�\\\n Č'�LMBl4�fj�MRr2�X)\no9��D����:OF�\\݆���Q�)��i��M�8,�Bb6f���Pv'3Ѻ(l����T��(=\nipSY��r5o��I��O�M\r�\n�b�\\�����~�Y��JӁ��S=E\r��\$RE ��M&F*D�����pTLr��o��ф�\n#�d��A�L��:�ѯ%ނ�F�%�MVY��R�棋(��7 �)�;�=�-�)�M\rI\n���(ȃ&��A\n\$PH�,Cp���\\��b	k ���%�4\r�\0�7�Cb�\r�3bʁC\\X�.x�b�.ؤ�H쿰Kr�\"��h�4��2=¢(9�����C�!�ntR�\rҰ�����i�L�ͥ\\�28At�2T�M�|�9�T�<��,�\r�#��5��8Ckf-�4��.��h\\2B��9;CbJ%2Ӹ98RЗ&>/��DԊ��!\0�)�B2`=\r�FV�E�\\Lt��e��90��x9.#��˷��D1���ʳh�7\rcڄ)#(օ\ra\0P9�C��\\�H@β��b�=8V�P���H�2��m�n��R��R����:?�X�:��U�SW���/+�P����\0ཎc�Y:�Ҥ��x��\n@��C@�:Q�x^;�t�6�H�]�z�\n��uW!xD��wx���nA�6��:�x�1h��@�t�vD�IHP�h	�R�j1��\"ɾ{�ւ�c�����K{4(�/f�\0�\$\n���M�̦1WE,�'I�|� ���޽�M������_��\nQ��<�=\\JHtŦ�t͢�*b(	☨��pCYDe���nc�0�Xڔ�)������*a�����^\"��n,��@1��\0뮍��1\r=��(����2�Jb���j����8�JPfD�.�HМ��%[�X���3p(�����b3�l���H���2e���`�@�W���	��\n2a|�Eꅙ���w�������+\$�4�\\�!P�ئ圱|;�~*\$RN�F;a�!����X2�Ac�w�*ZJPTΖ\$��G-Ee��(�����e\$˧�� ���&�:,�V�\0c\\��ｐ�_�jP��4�gc��\"F��0���T��'��E�Pg&�0�&��an\r�f? yk-�4����_�Yr_��#䄑�����Ej优���m�����(���BR>�1�����* F���]�鋎Z&��͉)EiX��(�H��\$�y�DP��)x�\0:�0؈�HL~2r3z&D�c��GZZ\"ɉG��Z%a�-8p����/���VT�K=X=FS.@S[�',��D妩��5��ܦjqA<�)����\$v�tN��@";break;case"id":$g="A7\"Ʉ�i7��ᙘ@s\r0#X�p0��)��u��&���r5�Nb�Q�s0���yI�a�E�&��\"Rn`F��K61N�d�Q*\"pi���m:�决y���F�� �l��hP:\\��,���FQA��	�A7^(\n\$�`t:����X�e�J�J����Z儨�@p���H�S�h��i�����gK�����SD�G2��CH(�a3R�@�)��b4:=��\n&ʫ=��W@r6�#��wK1:�ZU��/�� �Z\$�Ơ���#i�8\$\0P�9�Z&\r#j���,�4��H����ʴ8�01\rL[d�\r#�~	��8\r#��%Űkԇ�0�f9\r	T(� ��!+��CCdo��3��O��	К&�B��c̴<��h�6�� �	©\"��Cch�\$�r%�c�b���Z:b��#@쳢apAG�\0�'#2ĬB�������6NTs���\r���!s&̀�3%��9O*H�!�\0�Ȫ�3�)`��%���?£\"X챩;>�c������Y\rW�\0x�����C@�:�^���\\�A�rN,C8^�������xD��#8�:Z���D\ra|\$�cb�����^0�̊7y�{�:\r��>�N��q<�`��]tꤊ*)8�2�˦/`���\$\n	�r���r(�J�������,��6���<,d��C:t�'�k�5�����4�i�\"�8�X@(	☩��J%(��u�4�΁�#��+>Я�\"�7�J?2\n:X,��H�֎���7�J٣\nb��o7�@;-A\0�*e.���Hҕ�N69M԰��r<u%B����t�2Mui���V�#���RJt���2q�9âҵ��%�11��>L���_גm�PÄ�2�#C<���,�!\"�ǥ5��_���)�<���ECxJ\n���B�눂B1N��s@G�@h%���VШc\"�}�+����maJ�<�X���+4���@B�F���86G�dF�)js�b%�0�\$�Gre^��A��@Q\r�e�\$6��S�x����b��MlRPǔ���?� nU�t�;��Q�\nf�����q`��&\r!�X�!�4M�QE\"Z2�eY1��\"��p:�E���[Y��\r\r�����U�\0�� �";break;case"it":$g="S4�Χ#x�%���(�a9@L&�)��o����l2�\r��p�\"u9��1qp(�a��b�㙦I!6�NsY�f7��Xj�\0��B��c���H 2�NgC,��u7��F����n0�D����b��%��e|�u0���;��`u�O��ڍRi67h�:M.�P�U��ZT4�0Q��铰��[�R�u�DADC\r�� �\\JgH���h2��U���R2��S|SXi��j{)�W\\�gv%	���\\2�9Ȯ\\�a=`6\$�}zJp2��&�ĝX;F#fY�hJd�5@O��󨂏?�(H�� g\0�(s��j��8����98�\\�%m����P������(�F���8�ܫBJh��)Kl �c(�Ҷ�P�� ��(�@���(�>��yH���(�v7�B@�	�ht)�`P�2�h��c��<��P��`�=I��CcY\r<#���p*\r�Z*b��#)�(찍# �\rĒ�\r��\"1�J�!�QsL2��4P�4��9��ƨ�tZ\\��uC\0Ɍ�JF�U��B���[J�Ή۴�:�#80��\0��\"Ȑ䚦)�Uu�47;4E\nP�R4���Ҩ9����\n���ZT`x�\r���C@�:�^���]&����+�8^��c�����xD,ÔN:^��H��XD	#h��=��^0��@�\r{���c�����l�����[U�J�T/rҐ�������(!���8+�3(�Jb9�Ġ��&��:���F\n\n:0�5���:��B�k#~��ƖÁ��☩F\nTJ�3�Q���PAH�5��4��mD7#�x��W�`,��@뤺P�7ɶ3�4��\0�(��� �0��#s��i��Z��� چN���:�T�~�	gv�w�4L�^\rT\"���ޣG�Z#�	�0ҏAvx����)�\r\"CY��B��xb1�M�P�J�+6'^\nk\r\r~ɂCŲ�r�����Ē��Qi*�c'\"�Т)D�4'#JFY��Ĕ��ڢ�L\"*�2�2�LQ_(���rZ��5���4��[I�j���Bx\0mz�`�9�^a�i(e���\0�0-@7*\$\"�i�{���4Ԅ�\"Ӡ6qش���/d���`H�)'SE��`�R�	\"�L��\"�M�B��IL�|���#�dI�Du�2/�al��Zs�q�ș9�t��M����,5�į��1��NJl�2�tB�C�R/\0�3K�C@񽟰�����Ǎf�1���`t3�\\";break;case"ja":$g="�W'�\nc���/�ɘ2-޼O���ᙘ@�S��N4UƂP�ԑ�\\}%QGq�B\r[^G0e<	�&��0S�8�r�&����#A�PKY}t ��Q�\$��I�+ܪ�Õ8��B0��<s�W@�*TCL#�i\$\n�AG�S�,�ƀA���B�\0�U'�NE��ΔTF�(H2j?wE���dZ�ʼZ��0\$�M�_��pe4PA��:�Ω�Q�c�/)@��u������kPs�a\0M9�ʗ*y=J�+iy�]J�L�\\�d?mʈ�G{�\rUT���h4Dq_rAV�Ѵ�>U#��N��#��8D?�C��Y_�/�lr�j�H�/��A�*�^A\n�f����[:\$�(࣑J�q9�P�96W3La8s�\$2R�#+l7\r�PH�� g(���HN�Dŗe��B��L��ka[K\$\"�E���t�%��E1P>U���\\r����]-gJ	CG1_��*z[�g!vL#��OI\0@���C!Ȥ��%KSӌ����G����@�n���<!��CH�4-�5��.��h��\"�L��6����L����RA9Pa�\\�1ZՐ%P�)�B4�>��A�1RS)\n�5̓d�MV�H�#���]�H�n�(e�L�')F�֐-yؐ-��A`��#�5`��I2H<�����f�cļtZT��%�b�]�o\\]j��P�0�c��9��9��x�\"���4�C(���\r���C@�:�^��(\\0��h�7hav�3��(ݸ��9�#~���9�(���0��XD	#h�6�n�:�x�6�\$:\r|�:\r���5��\0�:h���rarzγ�Ft4����K�P���P�\$\n�8�4\rH^��B���m�?��o���D��.��^�,���:�y_�4�\n|�(T�#;�G3���t��k?u�2-Dr�HA��2^�U|.�|T#� ��xPI��&��q�\\?����.�0�Hٱ\" �ȁndӡ_L^�:15�d�PY\r��7��\r�5p�C8 \naD&\0�\\� ����`�\"(nH���4�P��pr\r�6��joG�?�\"�#aő�F�r��8����5RD��7��I(e!E*���UqP:D؆0����_�9�m`0ƀ@�(r\r1M�8��]A���7��e;~p���)�:p�X���q���2���\n\nru��ys.���_��(do�*r<Ǳ-K�\$D!���\n�l\r!�5��b�a\r��Һ4�Hf.�::��(m�'J��\0U\n���@܃�\r���T�@�*�D�pN���6c�.+D�*F�S��&��L�}<'�o+�PI!�%��0#�GI	\$�Q�\$��G�G�8�2�\$\\�~9ũ�	�2LPR� miN�U��9D`� Ha<'&er��,b>�Iz�D�|�S���Z(2��,���J�d�Bz�F�OA�%X`����";break;case"ko":$g="�E��dH�ڕL@����؊Z��h�R�?	E�30�شD���c�:��!#�t+�B�u�Ӑd��<�LJ����N\$�H��iBvr�Z��2X�\\,S�\n�%�ɖ��\n�؞VA�*zc�*��D��\r�֊L�����=qv�kGZ�)Z�Zg���\\;�K�	X�M*dP�Z\nF�&R��(�����e1�vASb�+aN��s��0�Z�qO\"0V�&7���#��aژJܑ\n�\r�X!N�f%<�v%�b���B@�X��1�N�rY����U*e�ے^�J;P�\r������rBe�\0u�DC�\\:iy�[�\$��'Qjǔ	�N�rgA������Re9����22E��N��k�#+`7\r�PH�� g ��Yd@��EBbP.N!�P��8��r�.D!@v�o��T�e�Y��nv1˱+D�iz����e'�bF�L�\\�ʖ�pKLs+G?/�t�-KbDL��X�9�S�����[��>��c�D<��h�6�� �鑥���?�`�9K��d��Ђ�H�d仾��H&b�)�1\r/�%�] (TQ?�J�F�mS��(j]��|v�I\n˥Sc~ӡ\rKV֨7%̜�1YFFY���WP�Ql���LX6?\\�@P�0�c��9�9��x����4�C(�g��@4c�0z\r��8Ax^;�p�2\r�H݇�ذ���vx<a�p�4���D��3���N/�C`�7\ra|\$����2�����|ׄ��4\r��7��2�H���n��-��8�*-fK�tcn�@�̳d�:*�M,��'as�K�7K\"<��tq��\$��Р隐�OW\nc�'YJ^#��Y�����_�v~S1��xB��)��E[W�||PB-eb��k	�Uѥ`����^���hu--�\\�'>�]���]��,��@1�a\0�\r��@ȃi��)��0ik`�;�D���jh�4��,�۔A�6�\0��ó82h���4�j�\0�v�tޢDLh԰� 	|K;w��J�4���\$�'�,+pN䶈�)ĉ\" �������h0�#�\"�L\rkm09����� aa� 4���Z�e^\"�\$8��E)bvd�٩#@PS�l�3��9��6_Bt��b<-���1��N\"�xg��2p�82�՘la�6���E�00����[em!�3��\nF�M�6�Vpf��*�@�A� g��U���PT�bt�8�>����j8������J^Lt��a�N�7�6U���j�D�B�@GRE��IE\"�1�<\"D�2�x�1N�P8�Ia1��H��#�\r�Y�F���RK>	8I�Ad,�f\na���6���s�5@(�\0��p�Mf�����ٞH�%%�Sh_�UI�<�O�\"";break;case"lt":$g="T4��FH�%���(�e8NǓY�@�W�̦á�@f�\r��Q4�k9�M�a���Ō��!�^-	Nd)!Ba����S9�lt:��F%!��b#M&Q��i3�M��9����\r�Sq�6ib��\0Q.Xb��'S!�;��Mf�0��i�1�B�@p6W��B�rs����J1ΑJ������J��#�H(�k�TjzR!��a��PMD4�e�k�C���e�֦����l��̦�o�K�`�t� (�e2I��yvk9��R�>A�^�_�҅^Rj:���r�<v�a�Ɵ��T��C�ċ��B��� @�/�\0�h ΂A�T:- P�2��p���Zqj	#*������:�N�4�+���A�h�2�#�V��#���.�(�0�\n��!�H ��0证F!]/���:���4�J���,����NC\nڅ�L�P̅��46sZ	6���:MQZҒ;+�b\$	К&�B��c�<��h�6�� �'�J�֎�\"�汈j9�c(�޽�����m*�&��&��b��#4Cz4��\0�0�ɚ���T�̫\r�z_O9�\"mN��PΰI �b�i{]U�LP�\r�J���K �C��B��CX��Q�<1[�0��jIR��PA	��J����`ί�2C�X������ԑ��x����V%I�>�7:L�T�H�9��2���9;@x�\r���C@�:�^��\\0��j�Sʰ���`�\r�H�7�D��p/�NC��H��\\� ��|Ǆh�4=U�ړ��S%jʒ	����1CN�,\r���/�\"-�]���Њ@�ñ\$�ƄBt���^��3:V�?�j^��##Щ��,:����Яm�m�h�M4�[��H(d���3���)���>7O�\0�:�}[��yVo��v�Z03�����������2�l c�\\30�w�LzH,��@1�\0��\r�'�����\n!0����_�� �QɬJ��Vn����#�C2�\$�Y&s\n�K*�J�]% r^DH�G�Pr�tC�kF�s�Ѫ�o��� d����\rIo��4_�Y%�y��_[z�5�t2�D�\\�9vL)�,E�bh� �Nl��\"T`�4f>H�.<8���\"XS�4D�}�*%�B�� O�)Nq���қd7I�>��~�la���0���İ:����I�f&:���i.n�����@B�F��@�z��\$��t���4G\nb�2K�:�e�%42�����H�y9���\$56G�e#l �ˉD���+ᩎ�)6�A�%<Հ��a�Z!�X����'|�S������X�tWOR|�e��\nL�T\\yNp�ːИ�_gT]�,�`�\ryAR6L*H�&L�`)&v`���I����2̥�Y\"\\3�\"��\"gJ�b��1������%�ʇ0�F�4����P�\"��0@";break;case"nl":$g="W2�N�������)�~\n��fa�O7M�s)��j5�FS���n2�X!��o0���p(�a<M�Sl��e�2�t�I&���#y��+Nb)̅5!Q��q�;�9��g�F�9��6��,�Fl�MSR���q���GSI��e�a\$#�O�7�#�1��D9׎c��αZ�Q����d�a�8Xm(�23[�,5\\6e*<�\$�y5�f\n\"P�[�|�\n*B䠢��i�#�	�X�;�p�3y�k2����.��d4�-Z���s7_������h:�.9\$ܗ�웘�\rH��7#�������;�)[��#�0�E�c�v7\r�PH�� g� P����r�;!��)�I[M+-���#��B\\�\"��k����:.��N��89	� 7�hԡ@B��,qt42Ȳ;-�I�i�3�4���`9S*�\rè\$	К&�B���\$�6����C�B��\rʘ掌��ߍ�����x*�0�(/@�b��#'�h\\KOx�:�����Rv�!�\0�8+�,�Ӄ�<��I\"�0��\"j)���H#H��>��`�!(��*�x�g*3r��I�@���u^AЂܕ%��P#�⍭Θ�Q��n��C��o�O�*<�_U��\n���D���t��4&#j܆��P��y#.�+^%C����1(Cp��Hڗ���:�x�3��4\r�K�h(d\"GR2ߟ�����3\n�iޫbX(	���������Y\n�S'	Ӈ��b\$m3\n:Uun������'�b�Z2(xr�x:Jb���K5�������)O�WH�߿�m��kb3�*���#z\n1��\\�%8pĶ��&\r��ƍ8p�*lJڣ�ƺx̦'�x�7��L%1ɮ3m��p:9�\$��{ѽR��d��s��X�9��(�0�Q����d���}�6��G]�15	��9�t]\0�*8�P�+\"F���S~��H�e�ğ/�~�Hhwz�܈���A��q�&�\"�J�*���!�`�\n�Y\$*�ʬ@��͹݃!��8�v��F~�@:�R�TJ(U\n�����OB&�i��JH��� 9���T>6�r1FH� #dt���G\\b�,�J֒C0yA3.BfquF�#���b� #��)���=&Q��nT!jMx��s�R����;H(��-D�͆J�H�h#�����D�I uR��LG�Vq�#�#����p����E��8MH��Z�rn%�(�K�\n\nR�|T�3";break;case"pl":$g="C=D�)��eb��)��e7�BQp�� 9���s�����\r&����yb������ob�\$Gs(�M0��g�i��n0�!�Sa�`�b!�29)�V%9���	�Y 4���I���2��FSЀ�m4ǁD(�X�a��&�\0Q)�����G�<�zF��� :�O4���n2��v\\�\ne����B�U��W�\n�ҷ5'��t���(�u6�&3�@D0��\r�2T2Ω�KY��r����Q�oܝV�Q3JyL��y�U�l\r�)(�Ɣ��E���u5F\r7���0�����h(��	�Z99/(ȉ��0�5�HK�P��<���4a�c���Ih�pHEA�)�C�h5C8�=!�0ء�B��:?�Ҵ�R\0<��r��{h��!jz4����2#��ڹ	�\"\r��h�%&!\n�6cJ���Q��<�iJ<��#,�0ʁp7�\$��γ����s��%P�)�I���@�	�ht)�`P�\r�p�9T�����\nbK\r���E��h�M�c� ��x����#�;�Jpֈ�)�p@)��\0��(T4���(�:��\n����S��V/��?ɣjPM��zm7��:<���0@7�S��u#0ҡ��(&�חT�0��3�����3l[IjmZ����4�IRiT#�(AY2C�<���1y%!,`��O�\0Δ�\r�\"��9@�c����D4����xҺ��As�3������7cM��A�9�(���7\ra|�Hzr\\�HPx�!�9ct�;3�`��Z�blb�(<R�-��@ʲ��>ژ�ܮ�,�X��L�2b�����%�f���;v4[,�̥����,1�\r�8@*J��]��P�����*l������V��I�}�vix10�@����K+<��8=\$����%uOOcCj����L��*��}@�:�K7�&^�f-A���0i>�t1���^�WaOu�4�F�Q	����\nYC�&0�/P��·s%�#@�B��I�6���r��.&�I�(d�0�1�:��a�=��!C0֐	�iK}�Ē���f��߾�lx�zAq%YEp��I�c1Im��~��c\rK܃���\\SQ�d��r��O�{~����Va�7o���s�<���2&&�3V\"9��\0���Q1�'��C�\n�B�.%D�)ȃV�HFRC�Б��la�����ǡ�K����6�\"��I&�-0�BA�#x+�ܓ�¾[�r�cP�*�@�A�6�r�%����J?���q�ص膳��<D;+#3-��0i�0g��6Ā:����ZMDt�?�PYc�DMA50���x	�l��1�(x�c�a�	����tёQ�{��*�Jx,.`?R�!���[&� d���3ԇ�����\ntm�:t!>t���rvϔB��}sE§aQW�d�@�4E'P�\"���\r�مFR]��z�A�Xi-h�@��MM}Z�	���d���l8\0";break;case"pt":$g="T2�D��r:OF�(J.��0Q9��7�j���s9�էc)�@e7�&��2f4��SI��.&�	��6��'�I�2d��fsX�l@%9��jT�l 7E�&Z!�8;OF�x(�r4��&�	�+Z��a0#���%0��\0Q\$�d���9`(�g�'lA��eg�%��	7HV�S�>�\n�L�ѓU\n�i�gCL{:d2�\rƚFt�%��N��a�H9[�F�<|D0�d�	���\n!�v�Q\n�B�YJF]�(�e7���y3Qu�o�K<WÐ�dw{����(4sȦ������X��oÞ'\r�`@�J����\0�<� L!	B��<�Cr��xH�A��c����#����\0�7�kh'�M����h҄�B	�S�@S�6���B(Z�7�8� �����,���#r��?iS�#x��)Z�BЌ��3�D�ڧγ��@�	�ht)�`P�2�h��c\r0��2K\$�p*ځCc�GIS�����w�(�7�i@@!�b��-c����a��z�6��bX�+Jv�+�uB�H�O:H ��c��&�@�3��ʒ L�ꖹ#J�Ͼ��<	��#�C�%�\0��2��/�\0ҘF��V��	�͌��#����\"j��\0x�\rx��C@�:�^���\\�S�8\\���zQ���%�����(��t7\ra|\$�����?��^0���@�'��٣�5-X:#��{`'��44��U\"���\$�2��R�Z��\$\nj<�Y,�P�):��/�<٤�bp(������*��2�z��6<~�q\n��΁��l@��X���\nx�*2�O�en�23��sa��c ꅥ�zx�##x���!�am��k �xܘ�P�}X��,��*z���{�KH@)�\"c�2@#\n�J{��^��)���9<��{dMx��j2�|t�������KE������ɉ�jˌ�@���'1۟�H�H�h%I!��֖C��!+4�^͍Q�E��xVeWk�o���C�^Ae\nf,��xTK!��-o����tM�k�-i��2���M�=�D�����\r��1��`	 zZ��7�%��K\n3%���Hn]Aj3*oq���]� \n�P#�p�Y\r���!x �Uc�m��)�tg_)g.�b��8k�[y@�!%<\$A	�wW@*?��J�d�?et���K���|��#&��4x-�k��\rKrX�\nj-�(a��,QK(LzR\nM'�Q�<\"9���7dx\n�J�I����RA�Q�p��C���`E\\�H³��aB��E��I:c:[�/R�J7�{HsFM~\n`M�";break;case"pt-br":$g="E9�j��g:����P�\\33AAD��� a�Dy���V������v4�NB���u4����QP�m0��sl�i6�̒Ӕ�c���2ЃE�L��\\�?��f�c	��o�F�9��a6D�Z���m&)��4�&J��U9ʁE��a�Jΰa�p 2]���t}je9Ү�}�j��\r5��P�̙�k1�����gX��]L���(�a�ID���C0���k_���Q�o�,|bf��\"��+��h���rcG�n�`�v���:���.���!� @1+p�P\"�ޏ,�7, j���(�hPƄ�IzЗ�a\0�7�k@'�NSJ��e:��\$c(Ư��\"���Ҵ��+8����\$����#r���i:SA	,|�\$�C�����0��̲��l��3�N0�\$Bh�\nb�2�x�6����=�\"�h6F��T�Km���F��P��O�����ZLb��#0쁍�rf=��V����:��R���i�L�&�s#��(�1�mpH)��.I[�1G�s��2H2<a����e��`�%��b6°�JJ�C-l0ҏjD�[Ђd�/ux��D���MS��h&��rV8.Ø�K�ŧn��p@\\E�3��:��t��\$91l�9�������q�^.)P�2��H�1U#p��H�8P\r���|��w<y��IS#�`9's��\"���Ъ�p���u���X�L�3\0�\$\n�89.Z�@)aJJ��+��\rɊF�\n#�r:WMVz�(���h��*�\\/�.�%v�\n0��}������)��#��'��(��`N��:�W.�i)�X:��l�v,���&;�@1��sX�8�u��B���D�s�\r�Okb�\0�(��4oKA\0�*l)��lz4\\�!K�\rE7i���!I-;�KR�'�z�v~.�����]2�KC^o�u��J��iV-��n��GI��v�r�p�X�B�d�e��P�d]�t\r���´z���\$�������,<Ox�2P�<(\r���gΒ�|3��3�\$����a̡��֊�݌Kl�@㝠�\n��D\0�����xb[��.�\n�)%�`��@����h����\0�0-m��pM�\r~�e��H� _�3/��E37H�5��B���Pk��ER�l��9�e����HGIT������*��;�\"�e��QK5�J�h^ĩʐ2�r��P�\0�Ǜ���y�1��\" q\n��	��N�\"��;єCTj�pd8����#L2|&!��1g32t����'�\\�Ga���(T�";break;case"ro":$g="Ed&N����e1�Nc�P�\\33`�q�@a6�N�H؁��7؈3��� 3`&�)��l��bRӴ�\\\n#J�2�t��a<c&!� ��2|܃��er��,e��Β9���l�F�9��a�0�����z��&FC	�eV�M�A��b2��q`(�B��8#9�q_7��I�%��fNF���a������%���59��j��!U�ܨi8f��,��i�g�qC�rH\n\"]d��s`d&\r0}t�Lr0���pV��m�hE#+!6e0���Sy��t����q�i�q=�]�~�@P��+�H���I7��d8%���2�pR��o��7\r���\0��=�LAD�0�#*'A j��h�BF���\nƽ.@P��/����P�/Lp�����\nz�4l�9\r�pґnBd6=\"�(��T9��@�5i�ڋ�ʂ��rC ����(HRF�D#�2�3�8\\�(��?/���D�2�9�CJn츠P�\$Bh�\nb�2�p�6����W�\"�(D���6>�䚎@R\0����)���5�ȍ#�%=O��§EMV�h��:�c\\�����&O��1�b%A�0z�/.ͳ���w4��6#��鮡`A.�y��p`�2�M�1��*�4M�6�8�ĉ(��L���=��Bh��H.V9��B�_�=R�8Ѓ���D4����x�\"�	�Ar�3��<4����K�@Ǝ��1L�p��H�80Or��|�a�:\r|B�nC\r�e/���	�x������\$�\"�싎�J��Pr�4z�\rw[ㄈ��aB��N3Z��(�x���9�R���*4��v�T5,C\r���1p�5_��)��T����\n���l��#sBmr�x�䑬v�>�nmh�.�#;5�2�.��CJj�v�P��	2�:��B���(�Ba(]\0�ƒp��\rȅe�\"�~	B\\#)�]�`��9e+G`�;���A͔A����\"����8~!)k�&���\n�|v���U|}ҒoL.%o��<H�<SO����MJ�o ��Ƙ�\\���p.�-�r��B-�[F �\" 'o�.�2���,@AǤ)����4hPg1謣L�c)�;f4�B��[�i%\$��(H��I�Q�9HH��\"޼�u\$�İ�|`+f�1��b��hQ(=3��W���K�\\�@0�`�����*�@�A��\$2\$7rn�Ó����͇E2&Q�YS2=wE�ɹ#��6%��˙����Ȑ�U:.C3�ΠșR+�'��iU\n�ԙ%-�sK9�H��8K�v�h B�XȲF0��7@e����^@��(�ލ\"u\"��D�mC��L�i#�Fx�p�E˩/Vsz8��ؗSr\n��\"&��m�����wK��B�p�c�NX=,";break;case"ru":$g="�I4Qb�\r��h-Z(KA{���ᙘ@s4��\$h�X4m�E�FyAg�����\nQBKW2)R�A@�apz\0]NKWRi�Ay-]�!�&��	���p�D6}E�j��e>��N�S�h�Js!Q�\n*T�]\$��gr5��9&��Q4):\n1� �K�I�Iзh���IJ�6H�B?!���([�&	����sD5AW�ꋬ�QcCXMe��1v��6Pe��:��C�ռƚi7\n����.,V���Ի����:��,�[�ӵ���7��ˑ��>��2S�jbF_#\$�@�/��T�:�q�G�%t�9�g��BhC�k\n��>P�����&��4'\0��B�@*,\\#%Ϛ\n[��\r�G�O�D�%���Hqi?J�.�+\r�\0�(��P�H:����̌�r3s.��~ȷa(��'I�7N�9��7;Gh8<����7�A j���2\\4�6��GOK�x�ELqkG���37Ry6���?����Shl�Ĉ�Z���?\$�<���9�MR�+j�\$(ELݚ���)pk~�9L�j���F���d*��\$�3�(��|_-����8Jy|&��������\\���:Feڐ^����/���\\�����⎦U0�r@��N\nI9�E�\n2���r�����Y���j����B\r���,�\"ϕ������+cL2t:�b��#4�,��rU^��&��-1�A�HQh�+�� (+�U�\\G*j�5r��\$�*��I:��	R>�<P�4�D�^Ҩ�ƌ9� [�n]oY�U�H���[z]��b�����,�ND�K�g-1nY۱q��6���u\$ �\"��h*���m��s&�*8�0�c��9��9��x�7����4�C(ɧ�@4z�0z\r��8Ax^;�p�2\r�H���p���w�<x�p�4���D�aA�2�G��l!�5� |Chp\r��6�P�xaŸ9�*@oM��7����( \r!��p��r#f��s�V�ɗ#Fu��rbo���\\%ϲ��\rF�7A���;�V�C (����h� (-ह bJc��(mg���BRۻ#\$'���XO�ˇ�.�7�6z1�q�|�h�\"��*�8h\n6lZ��[j�q���QJp>�l��(�m�S\r@'�0�NI�C��B(�#��#q2G���]�Ě�+F@��LHA�@*�VJ�~��j*&ŢH2sL.�4����N��D�����è p,X\$�X {A�4�p@L�4�0@�K��P(N ܛ�Lyвΰ��ix����.KWY'%\$�0�`\\�:jL�X6e���L����O�:Ģ�*��Vy��Mw\n��beD��=(�^l���A�y!�4�' �\$���2�\0@i�!��V�D*����U\n��\\�u�D�EEBX��8GH�ؘB@PS��3��GU�=o4�*��P��BG��E�Z�I�,�����W��`5���)Tr�D�O6\"��;��=�,�A�.��F��(�\r��V��j��B������s.2'��K��&Vn��B��l)\r���\0�\n_p \n�P#�p�c�U��	�F|ɂSV�Z8Y�|�P�^7X�݁J]�faE�[-x�ټ�j��%Н.�J�E���B�	Q<�r���D���O���\0�b�m��䌟3�m�\r�@\":��4f[xP�^�AK.���h��wkP<r���w7�:I�\n�0IlG^�OGј B��X�zJ�qS��A�o��2�}��+`\n�ӄ6��SQ`	M����{2e��2#�3.We`8i9Z�`�cx����vn��I��4+����-���\$�S�R����B���jdF ����᠍�	J��f���N\$@";break;case"sk":$g="N0��FP�%���(��]��(a�@n2�\r�C	��l7��&�����������P�\r�h���l2������5��rxdB\$r:�\rFQ\0��B���18���-9���I��0=#\0����i�LALU��b�&#���y��D�	��k�&),�P9P�j�l�e9)��\$� ���f��k���4j�\\�Y��e%V*�v0��3[\rR :N�S�9� �\$µ��1�iH�'��̠��`r����b9��m2�#�2�\nfm�L���Oo:�u���H2�M�x�ؘcJ�9�b���?�4��r�Bs8��IZ5�a(�H ��P�<<��:5=��<� P�����\\��b��#B~���(5���ޟ����3�[&%�` �c�z�h�0��P�2(L��>�@�2<��|�1i\0��K���I�@���\nt^����-K�`\\�#`�=���P!-�����3�?�cE#IЬ�R�\$���\$Bh�\nb�2�h\\-�U��.ʒ��28���!̂z9K�\$P�,0���s�p7�i�@!�b�������`̉����P���^�%2��9��b�2�C+����4�X꨿0�7^Ð��\r��op�(��<���n�����`�t9[c�`0eƬ��&�1���)M�8Y���9�D��\"⸕9�%��c�'A�ӁV\0x�\$�(��C@�:�^���\\���C \"c8^����\$7b�xD�#�;æ��7\ra|\$��f����^0��A4�ݟ��6�@�^̄��\râR�-ˀ@ďV��\rЀ��)Je�0@��(�M{#w�QNSܧ,V�X@)�JSD�,��b�����<����&��Y�?�m�-�{m�Y�ű�rS8�U��>��n(	☨W�\n����ݻ�W�5x\$#ף��Jg�\r��0��1f��������t5��\0��|\0cO��:���[ߒ,��)�� 	8'��`��nCd�{�w�I�]����؆�7\"�Y-�2����aP����ƃHzud� Cp�S���'���\nVW�	�0�@��e�]�L)!�,��^�L�8mA���R8�C�h4��Sbn���E�k((�ԈE��(T��%�3ǰ��#�S�鴢AƝx\nP�+�+\$��\"D�=�fXC��zJt��3�XkQA�̽Rf�Y�(,r#5 �N��L7��G�cx��ð\0�0-\nH�����,\"h�G�B��P�%Eͣ#ͼߜ!��N50�۬ۉb�N��(W4�T@(*2�P\nK\"#h��HŒ��@�&�`�o\"Q�t'L+9QJH��\$�i7�&L�\nI�E����r��mz�mz5\"�9Q<D��24pS:A2���#i�\r�M�2����D�Mȗz���\n:G�@?zp�\0S��1� ��Y \\�\\\"����-G�_#�v�W�r.�ؘH��\\��\nU4�Y����<%";break;case"sl":$g="S:D��ib#L&�H�%���(�6�����l7�WƓ��@d0�\r�Y�]0���XI�� ��\r&�y��'��̲��%9���J�nn��S鉆_0����Th�g4Ǎ�i1��b2�%�\0Q(�z����՜�\n(���h�@u�����g��̒|T�xvR)t�&�f�K�wS1��5�M'�A;M�U0�u�XD�T�i��V	�\n&�d[�9��m2�P��N�6�ʰZ1�?5ܰ6|��� �A\\S���r4͵1OSj�@��a8ߐ�L���?1&#������RK��C�ʊ�`PH� i� P�ϡ+�֣I�t\nh�J��Bb��5� ʛ\r�4<=-@\"��h��Bx�C�2��P��5/;F7��j�#`Ի�	�V7(�;2Ǳ���/*�����0�J��-!i0����,؝�|̆\r��;G�SI@�	@t&��Ц)�C \\6����K�B�o�ˢP:JCc�9C+���OT��\"����	R[.b��#�����\"3#Ch�ՎA>�0�[:%���0����8T�\n=f�N�@=M�0���\"L��8ބ�ʴQ��2�\rm]r��h���+c���>V{R���j��*��4�is�ڠ6(�ڎc�5/�\r\"I�n4 �0z\r��8Ax^;�t���\\��{\r��9�2�^V-�������-�a|\$����2�p��|Ȏa�41U��(�\"2�Q�%�\n=1���*U��O �,�21��m�‐(B���3�;\r�߀�)�j�3�E�p��4ϫ�%??#�L_0�=t�g���!PR�9٨*r�����ەО)��ȵ�\rL��<rAw�[�?N��J�#�e|�v,�,��@1�k��7��n1+�\0�(��\0�� MJn#\n��ů�\n���9�I�\\�O���O@�B�K�9.`�����t?g\$�'�� A�b��ۓ��O�A/zH4-��9�il�������t\r��v�KN(�����(J��5-��uYF\r������\r66P<��XO���3��)���Q���N����Hن�	��'��t`i��ɑD�b�9�\r)�5Ew&�b�pb��A���r�`+^\$쎓p����>o�v#V�#V�(�Cp@B�F����b�g3N�.���d<z��*�G9\r�L���1�0+I� I�?ʙhK��������2E��<�e�R�ZOM��<����8�<AH��j���A�	��8��b4]�Й��g\"֙,3��YOI,09D-\"\$djkc����&�F��5��U z-J��&�K6�Hl=,2�NsKd!��@C`IN�˃r��\n�x8�FzZ\rXhARg���E�(�Ѵ��\0";break;case"sr":$g="�J4��4P-Ak	@��6�\r��h/`��P�\\33`���h���E����C��\\f�LJⰦ��e_���D�eh��RƂ���hQ�	��jQ����*�1a1�CV�9��%9��P	u6cc�U�P��/�A�k��\n�6_I&��N�~]�3%�&�h,k+\n�H��D�RIVow����>y�g�����	�4%�����U����B� �Z�5�Ŋ�W��i0I��A0��-y��#��損m֝G\\b��	'hi��E��Ƽ�IS%�����#X�s�h�HI�Js��N��X\$�S�����h�H��������'����)�#L��\nR��0����Rr�B����*�{/щ��;�[w���Ȃ2Q���\"��%��%H���ޤ��H��A j����qj1Fl4%��Y�Q!?\r��i̰�\r�fh��\\^�'*� �9L\"HJ��s��jHO6JP��\n�\"��k�:�<NКz`�+��\$�l�ߧ�S�hѭz�9��� At�T��Zj��uukX�HY^R�ik]Uy_*��F-�kZ�5'��h	@t&��Ц)�C �\r�h\\-�7��.�t\n�B:�L�\\&��6��H�P��G�P\\��P�\0�A�\0�)�B3P��tĻ\$�Z�Z�#���I	8���	\")��F;�m=\\.�3H�\"�s[}��0�����9H���-s�a\":Jo�ˤ�&��X�G�oYj7�F�-j\"Ǉ@.R��%�����Bh�9��(���;�㔆2���9�X@!\0����D4����x�˅��6�#v�o�8^2���Ø�7��@:#��2��p�1\r��5�A�6�`�6�x�!�9� �4\r��7���2�H�n�ou�lZ��ͭ���O\n&��/ͮ1�/�h���\0�\$\n\ng�\\}��M[i�=��&�|\n��,f�Y�H��R�2�\$C�N�*CD�@��\n�� ��Ҟ� �1II�������)�~�<)�F��ɚ�f��j��!�K_d/�&�4DiW�ɅIו�KOٻb�8^�NaY�<O��\0x^}Hi�9/,���A\0cw@�:����A�3�\0�B` ���\0�\\HF\n���\$0����{Q�9��H��vs�\"�sH�P((��3)%\r�GŚ#�`��\$�T㖆�M�M^���c�4O!0������Pa�@�7=@��LxN��=8� an��4��]�e-d��.N(�x��#r��a�\"ɍ\n�T����s��p��Q7���=�M�lL�kjD��M��0��?k�^R�L��Y�\$�P��EW�l�U�+�V!��9�>v���le��Qu9�DO0I�JU1�P\n������\0b{tP��h8�1��P�DO�󐱶�3D��\0jb�0�%G��B�N{�*�~�)5>9��l��D/4�BR*�mN���U���\$RA�Ks)��:�p��`-��5�4܌�z]ma�66m�r1'�\"�c�\$�&t\$V�^2����j�1yTp��\$�/+ZI�ޭ#��-Y|g�]����exA���C�\0�,<\n\rAn��}�T(M��c��!�����d����<\nz�Еa;����";break;case"ta":$g="�W* �i��F�\\Hd_�����+�BQp�� 9���t\\U�����@�W��(<�\\��@1	|�@(:�\r��	�S.WA��ht�]�R&����\\�����I`�D�J�\$��:��TϠX��`�*���rj1k�,�Յz@%9���5|�Ud�ߠj䦸�����ɾ&{,��M���S_�Rj����^��8<�Z�+���e~`��- u�L��T�����&����R��	M��HI@�b�ҷ�����2x:M�3I��G�oe[���a���\\�JQ��a�r�^)\\�jr����qȮP\"���%r*W@h���)�����\0�\n��5��6�8��ځ�r��61aˑ�B��J�`F��XF��P)����7��Ɩ J��hf�4�J��КR�G������8�7��,��+�J#(��|�K0**>{ج�|*č��A�ԗ\n���9H˄O���\n��s�����YI���	��\\{CJ�����̿/��o4��t��T';?s��݄�\"���҈\\�ml�ش��Ñ��2�#p���^v�cƅu� ʜ��\nz��US�O@���/I���Gq����,�0C�=�+>�}�����/;�L�˭�8�7\$��>�l�V�f����	;9�m�ו�\rMZ��4G�a��H��u�{�)�:#��1�\"ƩM;����b*�0]_�����٢S�N\r����h�.:��Q�&dȦ�]\"WR���\$	К&�B��� ^6��x�<�Ⱥ�B�Tǩrm~2W�{\\P�� ��h�[όQ��D������	�\\b��#)\r;\r,i�N��i��)}@�ܷ/^�;}5ϱ^@D��u/FU�\"5L`��Ҝ�K�<kt�|,c~��tL���j�/E�L\\��qo@j��x��\\�����<.k��D)M��޸��B��\\=�N�W\n��T��Ŵ�LH.E\$�2t���T�	S�v}�ʃ�=�@D���Yq�]�����M�\n	��9���,a�7�%tC�p\r!�2�H \r�3�D�t\0�����qE\r�\rC��j�y�'��C�� ��9t���b\r��7�D�I�\r�h�@x�>/��&P�z���>��A\0i��C���^\"�;' C��x��w� �BwTl[�\n\n (�ĺ ��;Ga�W��񀓦0���\"ԉ|y/�2�~��q�UŞW���8,�#�d��3��~Y.�q�2�4��׀��hM��>W�Nc��h��x.��v�����/%J�!D������\"���`(�'\"���O��[[ʨ_�:�d�2�\$�P�Иҫ8�D�*��`��A���`�èr!���@!�et��I�����:Q�l���A\0c�����2�\"b���)��)ts�4��%,lWA���Y\"��rL����Sxv�^��@�	FH��j���\"����j��f��X��x�箽�ekz|�3~��0POm��)����b�4k6>�-����;-�)��IA-�UF��0� @���B���3G�S�d�r\"?��|cPe{�N~���M�j�S�\$��y�DS�}k�VfX�H�NrT�p�~Ѱ�C����f���Һ�F�,6�l_�X,��^���wcl�X��`���`u�f~����hM�,�l��B��g����)��\$���la�6����l0���q\$ m�!�3�\n�F\r5h6�XZ�H`�*�@�A� <T��\$B��ժKְ�T*g������8Vk6�'L������2��pRW���M�L�UY���L�rsANM�vл�щ�,ǯ���C�x��U:�f�`eӱtU�t���>\"!V;ǥ}�8��>�qú�Y�y],�B��)X�M0sQ7��#|d�|�3	����^���1V7h3���ɣ�s�1��=�}��DӞlS�N2�Ӫbp�aDʷ�t��u)�388���k3���Yo:BSm���y�wL&�Z_o>��G�2):\"��xC(a�2���L�a�w:Oj�1�Ȗ|���9Mw����g3�6��Ȋj^g�-�{h��dN'-o}���D�T���p��&P�";break;case"th":$g="�\\! �M��@�0tD\0�� \nX:&\0��*�\n8�\0�	E�30�/\0ZB�(^\0�A�K�2\0���&��b�8�KG�n����	I�?J\\�)��b�.��)�\\�S��\"��s\0C�WJ��_6\\+eV�6r�Jé5k���]�8��@%9��9��4��fv3��c�����PǬ�7��r\\&�p��%:�'���z}��+*��W��߰�N�3Y��5ys���g�ī;j��r��=����%@1�.:x�ƛ���6��.\\Q4�X�m(Îl�vZ�\n���#��ɲ\$�8e;.�9E��\r�p��j���P⧮;hպ�z(�+/j��91\\,���[E�);��K|�5��V�����\n\0����\$ \nC���RS���������*>˹F�å���(L>��J��\\I�{�2��@�?l��ǉ�q�hT�)5	��3���,Ե���>�g0����B.�:�E6tb�Gj�fM�m���K��Ƒ	ȓ5��\\��C��9�Cp���^u�b��M*�����0��ө\$��8�&�Ǎj!IR�y(���ޮ�J뒞�v�!8(Q��AP�v��˹���{�L.2�d\\%.�B�2p2䫶��g�0Wݷ��ʽ*�J=lv�MQ�\"˶�\"���DH\$	К&�B���\n��}�H0�^-��H�+Ey�)~<��αC`�9J�Z�]��wݮK�TB���Ɉ��(Z��b��#V	�X�b�;��5CӌڪӇ�����I�~���/�.�c��l�Ӕ�T���#�N�ی�mD\$����\n;J���ĈP@)���7���H9��Cӱ[\$��r����YnbsK�t4=D�[UFom��i������#磬{R�қ��C�h�9��(���;��^2���9� \\�@4}�0z\r��8Ax^�\0.!�6�����s��2���nu�8\0�C�g������n\r`���`e\r�4:�^A�\0�:�ޫào�a�5�P@C��{�����[X�_�\r��Ć��'L��YN�N]QD���܂�H\n\0��RzY�pO������_QD�L��u�.�]�G���T�[�_cE��\"�����.��������\\��iÚKz�`1Y��d\0�\\��z�i�F�g��������z��v3G�I:\$��Nlk>q��+1&�����@�9_i1��[ǂ�~�y�\\�Hڼ�4�M	X!�:�\0�A\0u�����HgtaD&\0�aH ���`��\n�\r0����;��o\r��9���+��g)�5�V���r�������	�l8�}jP�-D\\�%� ����Co)�_�&�ʅ!5ɤ�+�c&	�9,Y}�tq/ڛ��0�p@��\0r\r3�����������`�j|��˼4^̈\0�>�f�3�X�C�Κ&��[�\\�T�8�a��x\n\nuz��e%hc�ēɚ]'U\nU%*\"�Vh{\r%�>��5)/(i�\\+�r:=L�2R��!���\n�l\r!�5��\0���A�;&�n���F��6�W�>���*�@�A� ����Ұ	X����>����\r,��^#�)L]�j�((��#��b��*�(&���l��*hP�9#ʱԫ��]��\0&;S�Щ�t�WY�8�F+\n�mR���My�фP���El�j3�\\�)�?��ߚ2�V�L������U9Ck��N��u:�=��2�Z�aHc{������Ӎ(�+2�v�²WW�w��c'�0pJ鵨��)S7L��`�8A�,����;�";break;case"tr":$g="E6�M�	�i=�BQp�� 9������ 3����!��i6`'�y�\\\nb,P!�= 2�̑H���o<�N�X�bn���)̅'��b��)��:GX���n�O����T�l&#a�A\$5��)\0(�u6&�Y�@u=\\Γ�\n~d�͍1�q�@k�\\��D�/y:L`��y�Oo����:ц�9Hc࢙��|0��:�I�Ze^M�;a��e�,\rrH(�S̦�a�FL4��:(�|�1��M&=�c����}˃�4�D)��a��t&Qgˇ�O���\$�Lt�~�/�*�2�o;N�A l���Ó�4\r&N10k:<���\n��i����B6��,\$�h���`��#��b�\r�p�\rip�E��:�?A\0�E��3%�`�4����0����\"9R4a�ZN�\r#l��\naЈ\"C�\"-�3H�.�����8+%�LS�Cc�����d:|5���	#�0��)�H@5@��2J6����K;��\$�¬5)�D��T\nO�����N'�c��6�#+�2�l4\0ݠn�f6'ի�[�5� ώU���C�X\r���32T�@�<\n�cY���D�<�6\r+H&�5�B8^#��(�80c(�L���h���D4����x҂7#�rJ3��2<2#r\r��A�M���\"�5�A�6�b:�x�(���4\r��6c[`4�C�<��s,\n�Δ���}O\$:H@(	���i���aB�IB�(��jr��*�bN��h\\��3#��Ch���0�c�+�l	�ո���ꦏ4H>�9=+�ܓ�#x֛3��?͊x�*5��\rk�cK��/3�=X�(��5+<`�6�3\n��#<�;�H�͢�#er�8�7��:�#|��0C8@)�\"`@3&	hҋ�¦�����W�'�98��干���]�䘷~H�>7c*�LR��@a�ƆV���A�:�%����` <����v&呖g�`�#B��@��C�Q�IDו��y6t;x�\r a�A�9@�R�!hsF�9b,&�ijA\ro�a����,�p\r!Cv�`BB��:���'á�)�m�rY�!�g6�Ҏ\\�A�ÔM�\n�P#�p݃= A��ħ�S��d�X�Ԃ�\"S>O�D6��E�JVƬ�`�ɁLK�6A`���}7+��Er<�\$/GA`	��-b�aQ�JFbe,��?�L��b�9�3K�҇���t.}���JD�	�{m彺�l/\"<��qBH%)\$,O����h�TN��efD2#@�E��DU�`��\r̕0���):_L�0�\nNX|��aZ}�B�.�";break;case"uk":$g="�I4�ɠ�h-`��&�K�BQp�� 9��	�r�h-��-}[��Z����H`R������db��rb�h�d��Z��G��H�����\r�Ms6@Se+ȃE6�J�Td�Jsh\$g�\$�G��f�j>������l�]H_F�M<�h����Ѩ�*�6�J�29��<Oq2��y���,*Q��=����\$�*!`,�b���eqQ�HZe���M�\\e��E3�¯�c���b��hR뽭E%�@�q���/�A�Hx�4��еq��#s�au��ƙ�\\{ �Y���K3E���\$E�4I��=J�G�E\n��oɠ��JbV�7*�4M;��p��:4O���@���F��\r�aE	Yx�\$zh�Fi��;��3j�P��*\n&2 ��ė�!,�ϧ1ܣ)�ы�K<��f�%�\0H�� g2�1;�D4��4�m:���L#���њ�'�NR�� *�@�ǈ\"��h�4��C�Z#D�bY��#t���p��S�ڐCL=��Γ)F��,�O.j��&(jO) ��`�AL���p��բ����^��r�|�˖�a)6%�dVjU�9Y�]��ZLM.���#�ˣIKEF�haѠR���\$P�JahZ��\\-��\n.�	-�&��Z�C`�9N���b�J�>1��餪��)�B3!P!��\\�#�b��ˤF,\n����J�%e��D�8s(��x�a������Z���	H\n�/^ȶ�!&�꒖�\$��ç�*��G���ʗ0��V����>�5�^��̓��\\�YiN���,�����k^:_�:*F��䶷����\n�)���0�c��9�09��x�&���4�C(ɕ��@4u#0z\r��8Ax^;��p�2\r�H�ͅ����w�<sCp�4��PD��3���f/�C`�7\ra|\$����2��H��|�H�4\r�`�7�#�2�H��\\ڒxa�:8b:J�! ��2��F��)&���\0�i|�P0ۜ��Ag-ٝ4G�O�f�@G7��#�q�N�����B�kT�h)è��!D6eԩ�\$X��!@K�%\"6�7)&�B�DVyE�+[�ɹ6�ZJ�q)4,��b���akSD�V���B�!S?Ăb�h�@'�0���S\"-)�\0K�c25%6;��A�ތG�Fi܈B�&(.��:C��%1O��\\N\n��k*0h�b�%��Y\r��7���\r��:��C8 \naD&\0̥�v\r.�#@�/CrL\r/��?��1��o\r�a͇g��RA�ku�)���j�'zq�4�W�q�3����Y�j�7p�R5�>Z��B�I�!f:c�p�N�(��f�����\0�fS�{��?�r�z��4�Ǫ�C,�2lX�J�g8)Z��i���U�Y\"6���HK�\ntE�z`�`�.&��}��J�\\�p�i�G���s��Mq��=OJ۫(��vRR���Bgx�V%�\$����E�ֶ�C@PCba���bv�zV��#���Y�9����S�N����#L��\\� O��\0�0-\0��7�QI⼡4�]O��yH�`��+��j�5\n>�58N�`�ͩ4S�ɥr��h\\X�Ğ��+�mg�D1���2\r9XQ���E*Uc,��m����Z�&Z\r%�h)�d�(Q)?\0*���H�*��;����}�\"ϽH��Gk\\�q��[�Z}�A����h��	��2TP���mtO�=T�q�Ҡ�֮݋�WnnJ\\Di�6ÈB�Z���D����_8csA��2�K���w�<\"4!��Ά�\"��P�h+�q�œ���d:�xʣ��r�X�l���NT��";break;case"zh":$g="�^��s�\\�r����|%��:�\$\nr.���2�r/d�Ȼ[8� S�8�r�!T�\\�s���I4�b�r��ЀJs!Kd�u�e�V���D�X�T��NTr}ʧE�VJr%С���B�S�^�t*���ΔT[U�x���_�\\��ۙ�r�R��l�	@FUP���J����u�B�T���dB�α]�S�2UaPK�R�Yr}̗[:R�Jڵ.�V)�+(���M�Q`S�z�s�ӕ�:�\0�r���Uꊶ�K��.u�YоH�S>;Ƒo	F���g:��L�W�X��:s�	�����Hחe�ZX�i\\���`tI`�2�`P�7�A b��@���8s���N]��\"�^��tsđ�]�iA�-��E�t�I�E�.i(Z���A�bZN��AU#�vt�D�ZG��)J\$��+dy#\">�,\"��2|��3�,�64\$s^�B@�	�ht)�`P�<�Ⱥ\r�h\\2�\$�#�0\\���䖓�yP�K��Y�I(���*D�)�NR�I�\$9��Y\0��)J��KS���~O��09�#x�	�)�P�gADU�%{Ef����͖Lڡ�:�\\�d�a�V\"�T��A�C���.&�#��2�A\0�~�c��9B#(�8\r#��2�\0x0�F3��:��t��D# �4��\0]���x�7e���7Z�^��9�(錋��0��XD	#h�6�n^:�x�(ØA��@���~�0�c(@4��\0006�x\\�,��ñ02Ʋ�ġ_\0@I�@(	�@�1T�o/a���K.t�-̗&	�ʚ&��t��qk�\$z��=�=��.��I���☩����W{��	#KA�#�@�/E�j��B�%�\nH���Hˋ#x�z @:�c~Jb��3���&0Ӧ�ӊ¦��B#N���'�9\r�h@9��T�ΤA@�E\"�#�M��Ng0��@HZ� �LLR��\ne�Q�<Ǡ�*���c�b���6���i|�1��f��Àd+������B��r�<D���[NtLi�<�D8H�<@�Q	&JFDY�2G}���H���PX���.r�x�#�I��.��la�6����{�0���ءxmka�3��XF|m�6�U�be\0�*�@�A� e�A�����p ,�1rQ^/ ��)�p^�D��rU-\0(&�9\n��OGlB�1� D�=,�W�ؕ颃Q,t�1|�\r�T������b9D\0�2�\\Z��:w��	�(&=`�'\$�j��C&u%-\"\0��&9���Y�01��\"LJy�>R�C��M*[*���dL��A父���4=\"R�1P";break;case"zh-tw":$g="�^��%ӕ\\�r�����|%��u:H�B(\\�4��p�r��neRQ̡D8� S�\n�t*.t�I&�G�N��AʤS�V�:	t%9��Sy:\"<�r�ST�.�����r}ʧE��I'2q�Y���dˡB��K��B�=1@��:R��U��w�Dy�D%��h�<�r�nd��\\�s*.u�AH����*�eQ��t8;�\0�t�S�T��̕\\TR����ʟs&PN��NZ�KǖW��1ҀY@�u��зW�W+�V[��U��uC�x�r�j�U��Й�9U�hmΙ]˔�����\\����B�kY`r�D��P@\$�\\���\0�<��(P9� P�2�`P�7�A b��H�d�8�,'!v]��!���sđ�]�Rx� �i����|@��o�ZH\$k��|C9T��.�@�A=\$\$����!�C�IkL�MSc?�D�)�e�Bs���	@t&��Ц)�B��E�\"�\\6��p�2H�I&C�R�\r�����ʨ=H��5ͨ�4J�	�<!�b���x�2�ˋ\0E�\$9>�㞘-�),W4'1�D�T4\"�89�#x���`PADU�����Z6��k����@���FWu�~K|	=�-�Z���1\"t�KB&�#�*9�\n9��x�����4�C(���\r���C@�:�^��H\\0��h�7��]��}q���jZ�xEZ#��2��\0�1\r��5�A�6�`�6��x�!�>9���4\r��k��5�@4��Nb6�Z�\\��,�.̳l�Ĳ,�qv�ġ^s�\\(	�(���4��a�!�V�ؗͅ&	�\\��qjۗ�~���ȗ��1�Q@�rb��)��2��)�T����\\j���Q,��g]��rbV��B�Ћ#x�zP@:�#~Xcc�3���&0ө�Ӎ� ��\rЈӨa�N��Cx��1�ŷ��R��`�A˥o.*��M��s	�h��Z\rYMt�`P�v��S���)g\"1�=f8` C�\$9��Ԛ\\lop2*�@i�A��V�9D!�*D�\$��<)�8�����S�vB�0e�&D�1��0�<s��w����@�2y`X�1B!��b:D��4!\rO�V�`ia�-g��Cl��Z���CHf-�:6����`m�	H�^�T��p�n�7��Ё#an��MU�*�Բ���ܶd��L�@C\n�P���hdt�q8:	يМ�\n��+�x�3�@r%q�/�s}&����G(��>r�����\$[���G�PAC�aBȥ��\nf���i5 ƅT���`Q��[+�E���?��r.�X�EH��<Iz[ˤ+t\\�Er\\*��";break;}$tf=array();foreach(explode("\n",lzw_decompress($g))as$X)$tf[]=(strpos($X,"\t")?explode("\t",$X):$X);return$tf;}if(!$tf)$tf=get_translations($ba);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Zd=array_search("SQL",$b->operators);if($Zd!==false)unset($b->operators[$Zd]);}function
dsn($Bb,$V,$H){try{parent::__construct($Bb,$V,$H);}catch(Exception$Qb){auth_error($Qb);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$zf=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$o=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$zb=array();class
Min_SQL{var$_conn;function
Min_SQL($h){$this->_conn=$h;}function
select($R,$N,$Z,$r,$E,$z,$F,$ee=false){global$b,$x;$Qc=(count($r)<count($N));$I=$b->selectQueryBuild($N,$Z,$r,$E,$z,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$z&&$r&&$Qc&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($r&&$Qc?"\nGROUP BY ".implode(", ",$r):"").($E?"\nORDER BY ".implode(", ",$E):""),($z!=""?+$z:null),($F?$z*$F:0),"\n");if($ee)echo$b->selectQuery($I);return$this->_conn->query($I);}function
delete($R,$ke,$z=0){$I="FROM ".table($R);return
queries("DELETE".($z?limit1($I,$ke):" $I$ke"));}function
update($R,$P,$ke,$z=0,$He="\n"){$Kf=array();foreach($P
as$y=>$X)$Kf[]="$y = $X";$I=table($R)." SET$He".implode(",$He",$Kf);return
queries("UPDATE".($z?limit1($I,$ke):" $I$ke"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$ce){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$zb["sqlite"]="SQLite 3";$zb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$ae=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($cc){$this->_link=new
SQLite3($cc);$Mf=$this->_link->version();$this->server_info=$Mf["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($cc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($cc);}function
query($I,$zf=false){$ud=($zf?"unbufferedQuery":"query");$J=@$this->_link->$ud($I,SQLITE_BOTH,$n);$this->error="";if(!$J){$this->error=$n;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$y=>$X)$K[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$Vd='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Vd\\.)?$Vd\$~",$D,$A)){$R=($A[3]!=""?$A[3]:idf_unescape($A[2]));$D=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($cc){$this->dsn(DRIVER.":$cc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($cc){if(is_readable($cc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$cc)?$cc:dirname($_SERVER["SCRIPT_FILENAME"])."/$cc")." AS a")){$this->Min_SQLite($cc);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ce){$Kf=array();foreach($M
as$P)$Kf[]="(".implode(", ",$P).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($M))).") VALUES\n".implode(",\n",$Kf));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($I,$Z,$z,$Bd=0,$He=" "){return" $I$Z".($z!==null?$He."LIMIT $z".($Bd?" OFFSET $Bd":""):"");}function
limit1($I,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($m,$Ya){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($D=""){global$h;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){$L["Oid"]=1;$L["Auto_increment"]="";$L["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$h;$K=array();$ce="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$D=$L["name"];$U=strtolower($L["type"]);$ob=$L["dflt_value"];$K[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$ob,$A)?str_replace("''","'",$A[1]):($ob=="NULL"?null:$ob)),"null"=>!$L["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);if($L["pk"]){if($ce!="")$K[$ce]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$K[$D]["auto_increment"]=true;$ce=$D;}}$Oe=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Oe,$B,PREG_SET_ORDER);foreach($B
as$A){$D=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($K[$D])$K[$D]["collation"]=trim($A[3],"'");}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$Oe=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Oe,$A)){$K[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$A[1],$B,PREG_SET_ORDER);foreach($B
as$A){$K[""]["columns"][]=idf_unescape($A[2]).$A[4];$K[""]["descs"][]=(preg_match('~DESC~i',$A[5])?'1':null);}}if(!$K){foreach(fields($R)as$D=>$o){if($o["primary"])$K[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$Pe=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$i);foreach(get_rows("PRAGMA index_list(".table($R).")",$i)as$L){$D=$L["name"];if(!preg_match("~^sqlite_~",$D)){$K[$D]["type"]=($L["unique"]?"UNIQUE":"INDEX");$K[$D]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$i)as$ze)$K[$D]["columns"][]=$ze["name"];$K[$D]["descs"]=array();if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Pe[$D],$qe)){preg_match_all('/("[^"]*+")+( DESC)?/',$qe[2],$B);foreach($B[2]as$X)$K[$D]["descs"][]=($X?'1':null);}}}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$kc=&$K[$L["id"]];if(!$kc)$kc=$L;$kc["source"][]=$L["from"];$kc["target"][]=$L["to"];}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($D){global$h;$Xb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Xb)\$~",$D)){$h->error=lang(11,str_replace("|",", ",$Xb));return
false;}return
true;}function
create_database($m,$d){global$h;if(file_exists($m)){$h->error=lang(12);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$Qb){$h->error=$Qb->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$h;$h->Min_SQLite(":memory:");foreach($l
as$m){if(!@unlink($m)){$h->error=lang(12);return
false;}}return
true;}function
rename_database($D,$d){global$h;if(!check_sqlite_name($D))return
false;$h->Min_SQLite(":memory:");$h->error=lang(12);return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$D,$p,$hc,$bb,$Lb,$d,$Da,$Td){$Hf=($R==""||$hc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Hf=true;break;}}$c=array();$Od=array();foreach($p
as$o){if($o[1]){$c[]=($Hf?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$Od[$o[0]]=$o[1][0];}}if(!$Hf){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$D&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($R,$D,$c,$Od,$hc))return
false;if($Da)queries("UPDATE sqlite_sequence SET seq = $Da WHERE name = ".q($D));return
true;}function
recreate_table($R,$D,$p,$Od,$hc,$w=array()){queries("BEGIN");if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$Od[$y]=idf_escape($y);}}$de=false;foreach($p
as$y=>$o){if($o[6])$de=true;$p[$y]="  ".implode($o);}$Ab=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$Ab[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Vc=>$v){$f=array();foreach($v["columns"]as$y=>$e){if(!$Od[$e])continue
2;$f[]=$Od[$e].($v["descs"][$y]?" DESC":"");}$f="(".implode(", ",$f).")";if(!$Ab[$Vc]){if($v["type"]!="PRIMARY"||!$de)$w[]=array($v["type"],$Vc,$f);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$hc[]="  PRIMARY KEY $X[2]";}}foreach(foreign_keys($R)as$Vc=>$kc){foreach($kc["source"]as$y=>$e){if(!$Od[$e])continue
2;$kc["source"][$y]=idf_unescape($Od[$e]);}if(!isset($hc[" $Vc"]))$hc[]=" ".format_foreign_key($kc);}}$p=array_merge($p,array_filter($hc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$D":$D)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($Od&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$Od).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Od)))." FROM ".table($R)))return
false;$wf=array();foreach(triggers($R)as$vf=>$kf){$uf=trigger($vf);$wf[]="CREATE TRIGGER ".idf_escape($vf)." ".implode(" ",$kf)." ON ".table($D)."\n$uf[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$w))return
false;foreach($wf
as$uf){if(!queries($uf))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$D,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($R."_"))." ON ".table($R)." $f";}function
alter_indexes($R,$c){foreach($c
as$ce){if($ce[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],$X[2])))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Of){return
apply_queries("DROP VIEW",$Of);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Of,$df){return
false;}function
trigger($D){global$h;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(BEFORE|AFTER|INSTEAD\\s+OF)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$D,"Statement"=>$A[3]);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$L["sql"],$A);$K[$L["name"]]=array($A[1],$A[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$I){return$h->query("EXPLAIN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Be){return
true;}function
create_sql($R,$Da){global$h;$K=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$D=>$v){if($D=='')continue;$K.=";\n\n".index_sql($R,$v['type'],$D,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$K;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$Ue){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$h;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$K[$y]=$h->result("PRAGMA $y");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$Jd){list($y,$X)=explode("=",$Jd,2);$K[$y]=$X;}return$K;}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($ac){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$ac);}$x="sqlite";$yf=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Te=array_keys($yf);$Ef=array();$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$sc=array("hex","length","lower","round","unixepoch","upper");$uc=array("avg","count","count distinct","group_concat","max","min","sum");$Db=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$zb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$ae=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Ob,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$H){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Mf=pg_version($this->_link);$this->server_info=$Mf["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$zf=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$e);$K->name=pg_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$e);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$H){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$H);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ce){global$h;foreach($M
as$P){$Ff=array();$Z=array();foreach($P
as$y=>$X){$Ff[]="$y = $X";if(isset($ce[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Ff)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($I,$Z,$z,$Bd=0,$He=" "){return" $I$Z".($z!==null?$He."LIMIT $z".($Bd?" OFFSET $Bd":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$Ya){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($D!=""?"AND relname = ".q($D):"ORDER BY relname"))as$L)$K[$L["Name"]]=$L;return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();$va=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){preg_match('~([^([]+)(\((.*)\))?((\[[0-9]*])*)$~',$L["full_type"],$A);list(,$U,$ed,$L["length"],$xa)=$A;$L["length"].=$xa;$L["type"]=($va[$U]?$va[$U]:$U);$L["full_type"]=$L["type"].$ed.$xa;$L["null"]=!$L["attnotnull"];$L["auto_increment"]=preg_match('~^nextval\\(~i',$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$L["default"],$A))$L["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]).$A[2];$K[$L["field"]]=$L;}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$bf=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $bf AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $bf AND ci.oid = i.indexrelid",$i)as$L){$re=$L["relname"];$K[$re]["type"]=($L["indisprimary"]?"PRIMARY":($L["indisunique"]?"UNIQUE":"INDEX"));$K[$re]["columns"]=array();foreach(explode(" ",$L["indkey"])as$Jc)$K[$re]["columns"][]=$f[$Jc];$K[$re]["descs"]=array();foreach(explode(" ",$L["indoption"])as$Kc)$K[$re]["descs"][]=($Kc&1?'1':null);$K[$re]["lengths"]=array();}return$K;}function
foreign_keys($R){global$Dd;$K=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$A)){$L['source']=array_map('trim',explode(',',$A[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$A[2],$ld)){$L['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ld[2]));$L['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ld[4]));}$L['target']=array_map('trim',explode(',',$A[3]));$L['on_delete']=(preg_match("~ON DELETE ($Dd)~",$A[4],$ld)?$ld[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($Dd)~",$A[4],$ld)?$ld[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($D){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($D).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$h;$K=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$A))$K=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($K);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$h;$h->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($R,$D,$p,$hc,$bb,$Lb,$d,$Da,$Td){$c=array();$je=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$Jf=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$je[]="ALTER TABLE ".table($R)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Jf!="")$je[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Jf!=""?substr($Jf,9):"''");}}$c=array_merge($c,$hc);if($R=="")array_unshift($je,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($je,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$D)$je[]="ALTER TABLE ".table($R)." RENAME TO ".table($D);if($R!=""||$bb!="")$je[]="COMMENT ON TABLE ".table($D)." IS ".q($bb);if($Da!=""){}foreach($je
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$c){$ib=array();$_b=array();$je=array();foreach($c
as$X){if($X[0]!="INDEX")$ib[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$_b[]=idf_escape($X[1]);else$je[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." $X[2]";}if($ib)array_unshift($je,"ALTER TABLE ".table($R).implode(",",$ib));if($_b)array_unshift($je,"DROP INDEX ".implode(", ",$_b));foreach($je
as$I){if(!queries($I))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Of){return
queries("DROP VIEW ".implode(", ",array_map('table',$Of)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Of,$df){foreach($T
as$R){if(!queries("ALTER TABLE ".table($R)." SET SCHEMA ".idf_escape($df)))return
false;}foreach($Of
as$R){if(!queries("ALTER VIEW ".table($R)." SET SCHEMA ".idf_escape($df)))return
false;}return
true;}function
trigger($D){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$M=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["condition_timing"],$L["event_manipulation"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($h,$I){return$h->query("EXPLAIN $I");}function
found_rows($S,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$qe))return$qe[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($Ae){global$h,$yf,$Te;$K=$h->query("SET search_path TO ".idf_escape($Ae));foreach(types()as$U){if(!isset($yf[$U])){$yf[$U]=0;$Te[lang(13)][]=$U;}}return$K;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($ac){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$ac);}$x="pgsql";$yf=array();$Te=array();foreach(array(lang(14)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(15)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(16)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(17)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(18)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(19)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$yf+=$X;$Te[$y]=array_keys($X);}$Ef=array();$Id=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$sc=array("char_length","lower","round","to_hex","to_timestamp","upper");$uc=array("avg","count","count distinct","max","min","sum");$Db=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$zb["oracle"]="Oracle";if(isset($_GET["oracle"])){$ae=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Ob,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$H){$this->_link=@oci_new_connect($V,$H,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($I,$zf=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'OCI-Lob'))$L[$y]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$e);$K->charsetnr=(preg_match("~raw|blob|bfile~",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$H){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$H);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$z,$Bd=0,$He=" "){return($Bd?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($z+$Bd).") WHERE rnum > $Bd":($z!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($z+$Bd):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$Ya){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();$Ce=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $Ce":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $Ce":"")."
ORDER BY 1")as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$ed="$L[DATA_PRECISION],$L[DATA_SCALE]";if($ed==",")$ed=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($ed?"($ed)":""),"type"=>strtolower($U),"length"=>$ed,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$L){$Hc=$L["INDEX_NAME"];$K[$Hc]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$Hc]["columns"][]=$L["COLUMN_NAME"];$K[$Hc]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);$K[$Hc]["descs"][]=($L["DESCEND"]?'1':null);}return$K;}function
view($D){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($M);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$I){$h->query("EXPLAIN PLAN FOR $I");return$h->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$D,$p,$hc,$bb,$Lb,$d,$Da,$Td){$c=$_b=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$_b[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$_b||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$_b).")"))&&($R==$D||queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)));}function
foreign_keys($R){return
array();}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Of){return
apply_queries("DROP VIEW",$Of);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Be){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Be));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($ac){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$ac);}$x="oracle";$yf=array();$Te=array();foreach(array(lang(14)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(15)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(16)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(17)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$yf+=$X;$Te[$y]=array_keys($X);}$Ef=array();$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$sc=array("length","lower","round","upper");$uc=array("avg","count","count distinct","max","min","sum");$Db=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$zb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$ae=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$H){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$H,"CharacterSet"=>"UTF-8"));if($this->_link){$Lc=sqlsrv_server_info($this->_link);$this->server_info=$Lc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($I,$zf=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'DateTime'))$L[$y]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$o["Name"];$K->orgname=$o["Name"];$K->type=($o["Type"]==1?254:0);return$K;}function
seek($Bd){for($s=0;$s<$Bd;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$H){$this->_link=@mssql_connect($O,$V,$H);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($I,$zf=false){$J=mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($Bd){mssql_data_seek($this->_result,$Bd);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ce){foreach($M
as$P){$Ff=array();$Z=array();foreach($P
as$y=>$X){$Ff[]="$y = $X";if(isset($ce[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Ff)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($I,$Z,$z,$Bd=0,$He=" "){return($z!==null?" TOP (".($z+$Bd).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$Ya){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$h;$K=array();foreach($l
as$m){$h->select_db($m);$K[$m]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($D=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$ed=(preg_match("~char|binary~",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($ed?"($ed)":""),"type"=>$U,"length"=>$ed,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$i)as$L){$D=$L["name"];$K[$D]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$D]["lengths"]=array();$K[$D]["columns"][$L["key_ordinal"]]=$L["column_name"];$K[$D]["descs"][$L["key_ordinal"]]=($L["is_descending_key"]?'1':null);}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$K[preg_replace('~_.*~','',$d)][]=$d;return$K;}function
information_schema($m){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($D,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$D,$p,$hc,$bb,$Lb,$d,$Da,$Td){$c=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($hc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($R).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$D)queries("EXEC sp_rename ".q(table($R)).", ".q($D));if($hc)$c[""]=$hc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$_b=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$_b[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$_b||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$_b)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$I){$h->query("SET SHOWPLAN_ALL ON");$K=$h->query($I);$h->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$kc=&$K[$L["FK_NAME"]];$kc["table"]=$L["PKTABLE_NAME"];$kc["source"][]=$L["FKCOLUMN_NAME"];$kc["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Of){return
queries("DROP VIEW ".implode(", ",array_map('table',$Of)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Of,$df){return
apply_queries("ALTER SCHEMA ".idf_escape($df)." TRANSFER",array_merge($T,$Of));}function
trigger($D){if($D=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($Ae){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($ac){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$ac);}$x="mssql";$yf=array();$Te=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(15)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(16)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(17)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$yf+=$X;$Te[$y]=array_keys($X);}$Ef=array();$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$sc=array("len","lower","round","upper");$uc=array("avg","count","count distinct","max","min","sum");$Db=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$zb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$ae=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($I,$zf=false){$G=array('SelectExpression'=>$I,'ConsistentRead'=>'true');if($this->next)$G['NextToken']=$this->next;$J=sdb_request_all('Select','Item',$G,$this->timeout);if($J===false)return$J;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$I)){$Xe=0;foreach($J
as$Rc)$Xe+=$Rc->Attribute->Value;$J=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Xe,))));}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($J){foreach($J
as$Rc){$L=array();if($Rc->Name!='')$L['itemName()']=(string)$Rc->Name;foreach($Rc->Attribute
as$Aa){$D=$this->_processValue($Aa->Name);$Y=$this->_processValue($Aa->Value);if(isset($L[$D])){$L[$D]=(array)$L[$D];$L[$D][]=$Y;}else$L[$D]=$Y;}$this->_rows[]=$L;foreach($L
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($Fb){return(is_object($Fb)&&$Fb['encoding']=='base64'?base64_decode($Fb):(string)$Fb);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$y=>$X)$K[$y]=$L[$y];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Wc=array_keys($this->_rows[0]);return(object)array('name'=>$Wc[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{function
_chunkRequest($Fc,$qa,$G,$Ub=array()){global$h;foreach(array_chunk($Fc,25)as$Sa){$Sd=$G;foreach($Sa
as$s=>$t){$Sd["Item.$s.ItemName"]=$t;foreach($Ub
as$y=>$X)$Sd["Item.$s.$y"]=$X;}if(!sdb_request($qa,$Sd))return
false;}$h->affected_rows=count($Fc);return
true;}function
_extractIds($R,$ke,$z){$K=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$ke,$B))$K=array_map('idf_unescape',$B[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$ke.($z?" LIMIT 1":"")))as$Rc)$K[]=$Rc->Name;}return$K;}function
select($R,$N,$Z,$r,$E,$z,$F,$ee=false){global$h;$h->next=$_GET["next"];$K=parent::select($R,$N,$Z,$r,$E,$z,$F,$ee);$h->next=0;return$K;}function
delete($R,$ke,$z=0){return$this->_chunkRequest($this->_extractIds($R,$ke,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$P,$ke,$z=0,$He="\n"){$pb=array();$Pc=array();$s=0;$Fc=$this->_extractIds($R,$ke,$z);$t=idf_unescape($P["`itemName()`"]);unset($P["`itemName()`"]);foreach($P
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$Fc))$pb["Attribute.".count($pb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Sc=>$W){$Pc["Attribute.$s.Name"]=$y;$Pc["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Sc)$Pc["Attribute.$s.Replace"]="true";$s++;}}}$G=array('DomainName'=>$R);return(!$Pc||$this->_chunkRequest(($t!=""?array($t):$Fc),'BatchPutAttributes',$G,$Pc))&&(!$pb||$this->_chunkRequest($Fc,'BatchDeleteAttributes',$G,$pb));}function
insert($R,$P){$G=array("DomainName"=>$R);$s=0;foreach($P
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$G["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$G["Attribute.$s.Name"]=$D;$G["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$G);}function
insertUpdate($R,$M,$ce){foreach($M
as$P){if(!$this->update($R,$P,"WHERE `itemName()` = ".q($P["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($ac){return
preg_match('~sql~',$ac);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$Ya){}function
tables_list(){global$h;$K=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$K[(string)$R]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$K;}function
table_status($D="",$Zb=false){$K=array();foreach(($D!=""?array($D=>true):tables_list())as$R=>$U){$L=array("Name"=>$R,"Auto_increment"=>"");if(!$Zb){$td=sdb_request('DomainMetadata',array('DomainName'=>$R));if($td){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$L[$y]=(string)$td->$X;}}if($D!="")return$L;$K[$R]=$L;}return$K;}function
explain($h,$I){}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){$K=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$D=bracket_escape($y,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1);}return$K;}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($I,$Z,$z,$Bd=0,$He=" "){return" $I$Z".($z!==null?$He."LIMIT $z":"");}function
unconvert_field($o,$K){return$K;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$p,$hc,$bb,$Lb,$d,$Da,$Td){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($ua,$lb,$y,$oe=false){$Ma=64;if(strlen($y)>$Ma)$y=pack("H*",$ua($y));$y=str_pad($y,$Ma,"\0");$Tc=$y^str_repeat("\x36",$Ma);$Uc=$y^str_repeat("\x5C",$Ma);$K=$ua($Uc.pack("H*",$ua($Tc.$lb)));if($oe)$K=pack("H*",$K);return$K;}function
sdb_request($qa,$G=array()){global$b,$h;list($Cc,$G['AWSAccessKeyId'],$De)=$b->credentials();$G['Action']=$qa;$G['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$G['Version']='2009-04-15';$G['SignatureVersion']=2;$G['SignatureMethod']='HmacSHA1';ksort($G);$I='';foreach($G
as$y=>$X)$I.='&'.rawurlencode($y).'='.rawurlencode($X);$I=str_replace('%7E','~',substr($I,1));$I.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$Cc)."\n/\n$I",$De,true)));@ini_set('track_errors',1);$bc=@file_get_contents((preg_match('~^https?://~',$Cc)?$Cc:"http://$Cc"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$I,'ignore_errors'=>1,))));if(!$bc){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Uf=simplexml_load_string($bc);if(!$Uf){$n=libxml_get_last_error();$h->error=$n->message;return
false;}if($Uf->Errors){$n=$Uf->Errors->Error;$h->error="$n->Message ($n->Code)";return
false;}$h->error='';$cf=$qa."Result";return($Uf->$cf?$Uf->$cf:true);}function
sdb_request_all($qa,$cf,$G=array(),$jf=0){$K=array();$Qe=($jf?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$G['SelectExpression'],$A)?$A[1]:0);do{$Uf=sdb_request($qa,$G);if(!$Uf)break;foreach($Uf->$cf
as$Fb)$K[]=$Fb;if($z&&count($K)>=$z){$_GET["next"]=$Uf->NextToken;break;}if($jf&&microtime(true)-$Qe>$jf)return
false;$G['NextToken']=$Uf->NextToken;if($z)$G['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($K),$G['SelectExpression']);}while($Uf->NextToken);return$K;}$x="simpledb";$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$sc=array();$uc=array("count");$Db=array(array("json"));}$zb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$ae=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$_link,$_db;function
connect($O,$V,$H){global$b;$m=$b->database();$Kd=array();if($V!=""){$Kd["username"]=$V;$Kd["password"]=$H;}if($m!="")$Kd["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$O",$Kd);return
true;}catch(Exception$Qb){$this->error=$Qb->getMessage();return
false;}}function
query($I){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$Qb){$this->error=$Qb->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($J){foreach($J
as$Rc){$L=array();foreach($Rc
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$L[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$L;foreach($L
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$y=>$X)$K[$y]=$L[$y];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Wc=array_keys($this->_rows[0]);$D=$Wc[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$r,$E,$z,$F,$ee=false){$N=($N==array("*")?array():array_fill_keys($N,true));$Me=array();foreach($E
as$X){$X=preg_replace('~ DESC$~','',$X,1,$hb);$Me[$X]=($hb?-1:1);}return
new
Min_Result(iterator_to_array($this->_conn->_db->selectCollection($R)->find(array(),$N)->sort($Me)->limit(+$z)->skip($F*$z)));}function
insert($R,$P){try{$K=$this->_conn->_db->selectCollection($R)->insert($P);$this->_conn->errno=$K['code'];$this->_conn->error=$K['err'];return!$K['err'];}catch(Exception$Qb){$this->_conn->error=$Qb->getMessage();return
false;}}}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
error(){global$h;return
h($h->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($gc){global$h;$K=array();$mb=$h->_link->listDBs();foreach($mb['databases']as$m)$K[]=$m['name'];return$K;}function
collations(){return
array();}function
db_collation($m,$Ya){}function
count_tables($l){global$h;$K=array();foreach($l
as$m)$K[$m]=count($h->_link->selectDB($m)->getCollectionNames(true));return$K;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
table_status($D="",$Zb=false){$K=array();foreach(tables_list()as$R=>$U){$K[$R]=array("Name"=>$R);if($D==$R)return$K[$R];}return$K;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$h;foreach($l
as$m){$ve=$h->_link->selectDB($m)->drop();if(!$ve['ok'])return
false;}return
true;}function
indexes($R,$i=null){global$h;$K=array();foreach($h->_db->selectCollection($R)->getIndexInfo()as$v){$sb=array();foreach($v["key"]as$e=>$U)$sb[]=($U==-1?'1':null);$K[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"descs"=>$sb,);}return$K;}function
fields($R){return
array();}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$D,$p,$hc,$bb,$Lb,$d,$Da,$Td){global$h;if($R==""){$h->_db->createCollection($D);return
true;}}function
drop_tables($T){global$h;foreach($T
as$R){$ve=$h->_db->selectCollection($R)->drop();if(!$ve['ok'])return
false;}return
true;}function
truncate_tables($T){global$h;foreach($T
as$R){$ve=$h->_db->selectCollection($R)->remove();if(!$ve['ok'])return
false;}return
true;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($ac){return
preg_match("~database|indexes~",$ac);}$x="mongo";$Id=array("=");$sc=array();$uc=array();$Db=array(array("json"));}$zb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$ae=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
query($Ud,$fb=array(),$ud='GET'){@ini_set('track_errors',1);$bc=@file_get_contents($this->_url.($this->_db!=""?"$this->_db/":"").$Ud,false,stream_context_create(array('http'=>array('method'=>$ud,'content'=>json_encode($fb),'ignore_errors'=>1,))));if(!$bc){$this->error=$php_errormsg;return$bc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$bc;return
false;}$K=json_decode($bc,true);if(!$K){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$eb=get_defined_constants(true);foreach($eb['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$K;}function
connect($O,$V,$H){$this->_url="http://$V:$H@$O/";$K=$this->query('');if($K)$this->server_info=$K['version']['number'];return(bool)$K;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($M){$this->num_rows=count($this->_rows);$this->_rows=$M;reset($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);next($this->_rows);return$K;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$r,$E,$z,$F,$ee=false){global$b;$lb=array();$I="$R/_search";if($N!=array("*"))$lb["fields"]=$N;if($E){$Me=array();foreach($E
as$Xa){$Xa=preg_replace('~ DESC$~','',$Xa,1,$hb);$Me[]=($hb?array($Xa=>"desc"):$Xa);}$lb["sort"]=$Me;}if($z){$lb["size"]=+$z;if($F)$lb["from"]=($F*$z);}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""){$ef=array("match"=>array(($X["col"]!=""?$X["col"]:"_all")=>$X["val"]));if($X["op"]=="=")$lb["query"]["filtered"]["filter"]["and"][]=$ef;else$lb["query"]["filtered"]["query"]["bool"]["must"][]=$ef;}}if($lb["query"]&&!$lb["query"]["filtered"]["query"])$lb["query"]["filtered"]["query"]=array("match_all"=>array());if($ee)echo$b->selectQuery("$I: ".print_r($lb,true));$Ce=$this->_conn->query($I,$lb);if(!$Ce)return
false;$K=array();foreach($Ce['hits']['hits']as$Bc){$L=array();$p=$Bc['_source'];if($N!=array("*")){$p=array();foreach($N
as$y)$p[$y]=$Bc['fields'][$y];}foreach($p
as$y=>$X)$L[$y]=(is_array($X)?json_encode($X):$X);$K[]=$L;}return
new
Min_Result($K);}}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
support($ac){return
preg_match("~database|table|columns~",$ac);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$h;$K=$h->query('_aliases');if($K)$K=array_keys($K);return$K;}function
collations(){return
array();}function
db_collation($m,$Ya){}function
count_tables($l){global$h;$K=$h->query('_mapping');if($K)$K=array_map('count',$K);return$K;}function
tables_list(){global$h;$K=$h->query('_mapping');if($K)$K=array_fill_keys(array_keys(reset($K)),'table');return$K;}function
table_status($D="",$Zb=false){$K=tables_list();if($K){foreach($K
as$y=>$U)$K[$y]=array("Name"=>$y,"Engine"=>$U);if($D!="")return$K[$D];}return$K;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$h;$kd=$h->query("$R/_mapping");$K=array();if($kd){foreach($kd[$R]['properties']as$D=>$o)$K[$D]=array("field"=>$D,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$h;return$h->query(urlencode($m),array(),'PUT');}function
drop_databases($l){global$h;return$h->query(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$h;$K=true;foreach($T
as$R)$K=$K&&$h->query(urlencode($R),array(),'DELETE');return$K;}$x="elastic";$Id=array("=","query");$sc=array();$uc=array();$Db=array(array("json"));}$zb=array("server"=>"MySQL")+$zb;if(!defined("DRIVER")){$ae=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$V,$H){mysqli_report(MYSQLI_REPORT_OFF);list($Cc,$Yd)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$Cc:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$H!=""?$H:ini_get("mysqli.default_pw")),null,(is_numeric($Yd)?$Yd:ini_get("mysqli.default_port")),(!is_numeric($Yd)?$Yd:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$o=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($I,$zf=false){$J=@($zf?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$H){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);$this->query("SET NAMES utf8");return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($I,$zf=false){$this->setAttribute(1000,!$zf);return
parent::query($I,$zf);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$ce){$f=array_keys(reset($M));$be="INSERT INTO ".table($R)." (".implode(", ",$f).") VALUES\n";$Kf=array();foreach($f
as$y)$Kf[$y]="$y = VALUES($y)";$We="\nON DUPLICATE KEY UPDATE ".implode(", ",$Kf);$Kf=array();$ed=0;foreach($M
as$P){$Y="(".implode(", ",$P).")";if($Kf&&(strlen($be)+$ed+strlen($Y)+strlen($We)>1e6)){if(!queries($be.implode(",\n",$Kf).$We))return
false;$Kf=array();$ed=0;}$Kf[]=$Y;$ed+=strlen($Y)+2;}return
queries($be.implode(",\n",$Kf).$We);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2])){$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$K=$h->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($_e=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$_e;return$K;}function
get_databases($gc){global$h;$K=get_session("dbs");if($K===null){$I=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($gc?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$z,$Bd=0,$He=" "){return" $I$Z".($z!==null?$He."LIMIT $z".($Bd?" OFFSET $Bd":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$Ya){global$h;$K=null;$ib=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$ib,$A))$K=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ib,$A))$K=$Ya[$A[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals($h->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$K=array();foreach($l
as$m)$K[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$K;}function
table_status($D="",$Zb=false){global$h;$K=array();foreach(get_rows($Zb&&$h->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$A);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$A[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$A)?$A[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$i)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];$K[$L["Key_name"]]["descs"][]=null;}return$K;}function
foreign_keys($R){global$h,$Dd;static$Vd='`(?:[^`]|``)+`';$K=array();$jb=$h->result("SHOW CREATE TABLE ".table($R),1);if($jb){preg_match_all("~CONSTRAINT ($Vd) FOREIGN KEY \\(((?:$Vd,? ?)+)\\) REFERENCES ($Vd)(?:\\.($Vd))? \\(((?:$Vd,? ?)+)\\)(?: ON DELETE ($Dd))?(?: ON UPDATE ($Dd))?~",$jb,$B,PREG_SET_ORDER);foreach($B
as$A){preg_match_all("~$Vd~",$A[2],$Ne);preg_match_all("~$Vd~",$A[5],$df);$K[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Ne[0]),"target"=>array_map('idf_unescape',$df[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$y=>$X)asort($K[$y]);return$K;}function
information_schema($m){global$h;return($h->server_info>=5&&$m=="information_schema")||($h->server_info>=5.5&&$m=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
error_line(){global$h;if(preg_match('~ at line ([0-9]+)$~',$h->error,$qe))return$qe[1]-1;}function
create_database($m,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$d){if(create_database($D,$d)){$se=array();foreach(tables_list()as$R=>$U)$se[]=table($R)." TO ".idf_escape($D).".".table($R);if(!$se||queries("RENAME TABLE ".implode(", ",$se))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ea=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ea="";break;}if($v["type"]=="PRIMARY")$Ea=" UNIQUE";}}return" AUTO_INCREMENT$Ea";}function
alter_table($R,$D,$p,$hc,$bb,$Lb,$d,$Da,$Td){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$hc);$Re="COMMENT=".q($bb).($Lb?" ENGINE=".q($Lb):"").($d?" COLLATE ".q($d):"").($Da!=""?" AUTO_INCREMENT=$Da":"").$Td;if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n) $Re");if($R!=$D)$c[]="RENAME TO ".table($D);$c[]=$Re;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c));}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Of){return
queries("DROP VIEW ".implode(", ",array_map('table',$Of)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Of,$df){$se=array();foreach(array_merge($T,$Of)as$R)$se[]=table($R)." TO ".idf_escape($df).".".table($R);return
queries("RENAME TABLE ".implode(", ",$se));}function
copy_tables($T,$Of,$df){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$D=($df==DB?table("copy_$R"):idf_escape($df).".".table($R));if(!queries("DROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Of
as$R){$D=($df==DB?table("copy_$R"):idf_escape($df).".".table($R));$Nf=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $Nf[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$h,$Mb,$Nc,$yf;$va=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$xf="((".implode("|",array_merge(array_keys($yf),$va)).")\\b(?:\\s*\\(((?:[^'\")]*|$Mb)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$Vd="\\s*(".($U=="FUNCTION"?"":$Nc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$xf";$ib=$h->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$Vd\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$xf\\s+":"")."(.*)~is",$ib,$A);$p=array();preg_match_all("~$Vd\\s*,?~is",$A[1],$B,PREG_SET_ORDER);foreach($B
as$Rd){$D=str_replace("``","`",$Rd[2]).$Rd[3];$p[]=array("field"=>$D,"type"=>strtolower($Rd[5]),"length"=>preg_replace_callback("~$Mb~s",'normalize_enum',$Rd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Rd[8] $Rd[7]"))),"null"=>1,"full_type"=>$Rd[4],"inout"=>strtoupper($Rd[1]),"collation"=>strtolower($Rd[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$A[11]);return
array("fields"=>$p,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$I){return$h->query("EXPLAIN ".($h->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ae){return
true;}function
create_sql($R,$Da){global$h;$K=$h->result("SHOW CREATE TABLE ".table($R),1);if(!$Da)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$Ue){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Ue=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$K){if(preg_match("~binary~",$o["type"]))$K="UNHEX($K)";if($o["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$K="GeomFromText($K)";return$K;}function
support($ac){global$h;return!preg_match("~scheme|sequence|type|view_trigger".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|routine|trigger|view":""):"")."~",$ac);}$x="sql";$yf=array();$Te=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(15)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(16)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(20)=>array("enum"=>65535,"set"=>64),lang(17)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(19)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$yf+=$X;$Te[$y]=array_keys($X);}$Ef=array("unsigned","zerofill","unsigned zerofill");$Id=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$sc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$uc=array("avg","count","count distinct","group_concat","max","min","sum");$Db=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.0.2";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' target='_blank' id='h1'>".lang(21)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($ib=false){return
password_file($ib);}function
database(){global$h;if($h){$l=$this->databases(false);return(!$l?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$l[(information_schema($l[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($gc=true){return
get_databases($gc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(22),'<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(23),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(24)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(25))."\n";}function
login($id,$H){global$h;$h->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Ze){return
h($Ze["Comment"]!=""?$Ze["Comment"]:$Ze["Name"]);}function
fieldName($o,$E=0){return
h($o["comment"]!=""?$o["comment"]:$o["field"]);}function
selectLinks($Ze,$P=""){$a=$Ze["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.lang(26)."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Ye){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$y=>$X){$D=$this->tableName(table_status($y,true));if($D!=""){$Ce=preg_quote($Ye);$He="(:|\\s*-)?\\s+";$K[$y]["name"]=(preg_match("(^$Ce$He(.+)|^(.+?)$He$Ce\$)iu",$D,$A)?$A[2].$A[3]:$D);}else
unset($K[$y]);}return$K;}function
backwardKeysPrint($Ha,$L){foreach($Ha
as$R=>$Ga){foreach($Ga["keys"]as$Za){$_=ME.'select='.urlencode($R);$s=0;foreach($Za
as$e=>$X)$_.=where_link($s++,$e,$L[$X]);echo"<a href='".h($_)."'>".h($Ga["name"])."</a>";$_=ME.'edit='.urlencode($R);foreach($Za
as$e=>$X)$_.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($L[$X]);echo"<a href='".h($_)."' title='".lang(26)."'>+</a> ";}}}function
selectQuery($I){return"<!--\n".str_replace("--","--><!-- ",$I)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$o){if(preg_match("~varchar|character varying~",$o["type"]))return
idf_escape($o["field"]);}return"";}function
rowDescriptions($M,$jc){$K=$M;foreach($M[0]as$y=>$X){if(list($R,$t,$D)=$this->_foreignColumn($jc,$y)){$Fc=array();foreach($M
as$L)$Fc[$L[$y]]=q($L[$y]);$rb=$this->_values[$R];if(!$rb)$rb=get_key_vals("SELECT $t, $D FROM ".table($R)." WHERE $t IN (".implode(", ",$Fc).")");foreach($M
as$C=>$L){if(isset($L[$y]))$K[$C][$y]=(string)$rb[$L[$y]];}}}return$K;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$Nd){$K=($X===null?"&nbsp;":$X);$_=h($_);if(preg_match('~blob|bytea~',$o["type"])&&!is_utf8($X)){$K=lang(27,strlen($Nd));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$Nd))$K="<img src='$_' alt='$K'>";}if(like_bool($o)&&$K!="&nbsp;")$K=($X?lang(28):lang(29));if($_)$K="<a href='$_'>$K</a>";if(!$_&&!like_bool($o)&&preg_match('~int|float|double|decimal~',$o["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$o["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($X,$o){if(preg_match('~date|timestamp~',$o["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(30),$X);return$X;}function
selectColumnsPrint($N,$f){}function
selectSearchPrint($Z,$f,$w){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(31)."</legend><div>\n";$Wc=array();foreach($Z
as$y=>$X)$Wc[$X["col"]]=$y;$s=0;$p=fields($_GET["select"]);foreach($f
as$D=>$qb){$o=$p[$D];if(preg_match("~enum~",$o["type"])||like_bool($o)){$y=$Wc[$D];$s--;echo"<div>".h($qb)."<input type='hidden' name='where[$s][col]' value='".h($D)."'>:",(like_bool($o)?" <select name='where[$s][val]'>".optionlist(array(""=>"",lang(29),lang(28)),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$s][val][]'",$o,(array)$Z[$y]["val"],($o["null"]?0:null))),"</div>\n";unset($f[$D]);}elseif(is_array($Kd=$this->_foreignKeyOptions($_GET["select"],$D))){if($p[$D]["null"])$Kd[0]='('.lang(5).')';$y=$Wc[$D];$s--;echo"<div>".h($qb)."<input type='hidden' name='where[$s][col]' value='".h($D)."'><input type='hidden' name='where[$s][op]' value='='>: <select name='where[$s][val]'>".optionlist($Kd,$Z[$y]["val"],true)."</select></div>\n";unset($f[$D]);}}$s=0;foreach($Z
as$X){if(($X["col"]==""||$f[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$s][col]'><option value=''>(".lang(32).")".optionlist($f,$X["col"],true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$s++;}}echo"<div><select name='where[$s][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(32).")".optionlist($f,null,true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$s][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$f,$w){$Md=array();foreach($w
as$y=>$v){$E=array();foreach($v["columns"]as$X)$E[]=$f[$X];if(count(array_filter($E,'strlen'))>1&&$y!="PRIMARY")$Md[$y]=implode(", ",$E);}if($Md){echo'<fieldset><legend>'.lang(33)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Md,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(34)."</legend><div>";echo
html_select("limit",array("","50","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($gf){}function
selectActionPrint($w){echo"<fieldset><legend>".lang(35)."</legend><div>","<input type='submit' value='".lang(36)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($Hb,$f){if($Hb){print_fieldset("email",lang(37),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(38).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(39).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(40)."'>\n";echo"<p>".lang(41).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($Hb)==1?'<input type="hidden" name="email_field" value="'.h(key($Hb)).'">':html_select("email_field",$Hb)),"<input type='submit' name='email' value='".lang(42)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$w){return
array(array(),array());}function
selectSearchProcess($p,$w){$K=array();foreach((array)$_GET["where"]as$y=>$Z){$Xa=$Z["col"];$Gd=$Z["op"];$X=$Z["val"];if(($y<0?"":$Xa).$X!=""){$cb=array();foreach(($Xa!=""?array($Xa=>$p[$Xa]):$p)as$D=>$o){if($Xa!=""||is_numeric($X)||!preg_match('~int|float|double|decimal~',$o["type"])){$D=idf_escape($D);if($Xa!=""&&$o["type"]=="enum")$cb[]=(in_array(0,$X)?"$D IS NULL OR ":"")."$D IN (".implode(", ",array_map('intval',$X)).")";else{$hf=preg_match('~char|text|enum|set~',$o["type"]);$Y=$this->processInput($o,(!$Gd&&$hf&&preg_match('~^[^%]+$~',$X)?"%$X%":$X));$cb[]=$D.($Y=="NULL"?" IS".($Gd==">="?" NOT":"")." $Y":(in_array($Gd,$this->operators)||$Gd=="="?" $Gd $Y":($hf?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$cb[]="$D IS NULL";}}}$K[]=($cb?"(".implode(" OR ",$cb).")":"0");}}return$K;}function
selectOrderProcess($p,$w){$Ic=$_GET["index_order"];if($Ic!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Ic!=""?array($w[$Ic]):$w)as$v){if($Ic!=""||$v["type"]=="INDEX"){$wc=array_filter($v["descs"]);$qb=false;foreach($v["columns"]as$X){if(preg_match('~date|timestamp~',$p[$X]["type"])){$qb=true;break;}}$K=array();foreach($v["columns"]as$y=>$X)$K[]=idf_escape($X).(($wc?$v["descs"][$y]:$qb)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$jc){if($_POST["email_append"])return
true;if($_POST["email"]){$Ge=0;if($_POST["all"]||$_POST["check"]){$o=idf_escape($_POST["email_field"]);$Ve=$_POST["email_subject"];$rd=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Ve.$rd",$B);$M=get_rows("SELECT DISTINCT $o".($B[1]?", ".implode(", ",array_map('idf_escape',array_unique($B[1]))):"")." FROM ".table($_GET["select"])." WHERE $o IS NOT NULL AND $o != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$p=fields($_GET["select"]);foreach($this->rowDescriptions($M,$jc)as$L){$te=array('{\\'=>'{');foreach($B[1]as$X)$te['{$'."$X}"]=$this->editVal($L[$X],$p[$X]);$Gb=$L[$_POST["email_field"]];if(is_mail($Gb)&&send_mail($Gb,strtr($Ve,$te),strtr($rd,$te),$_POST["email_from"],$_FILES["email_files"]))$Ge++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(43,$Ge));}return
false;}function
selectQueryBuild($N,$Z,$r,$E,$z,$F){return"";}function
messageQuery($I){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n-->";}function
editFunctions($o){$K=array();if($o["null"]&&preg_match('~blob~',$o["type"]))$K["NULL"]=lang(5);$K[""]=($o["null"]||$o["auto_increment"]||like_bool($o)?"":"*");if(preg_match('~date|time~',$o["type"]))$K["now"]=lang(44);if(preg_match('~_(md5|sha1)$~i',$o["field"],$A))$K[]=strtolower($A[1]);return$K;}function
editInput($R,$o,$Ba,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ba value='-1' checked><i>".lang(6)."</i></label> ":"").enum_input("radio",$Ba,$o,($Y||isset($_GET["select"])?$Y:0),($o["null"]?"":null));$Kd=$this->_foreignKeyOptions($R,$o["field"],$Y);if($Kd!==null)return(is_array($Kd)?"<select$Ba>".optionlist($Kd,$Y,true)."</select>":"<input value='".h($Y)."'$Ba class='hidden'><input value='".h($Kd)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($o["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($o))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$Ba>";$Ac="";if(preg_match('~time~',$o["type"]))$Ac=lang(45);if(preg_match('~date|timestamp~',$o["type"]))$Ac=lang(46).($Ac?" [$Ac]":"");if($Ac)return"<input value='".h($Y)."'$Ba> ($Ac)";if(preg_match('~_(md5|sha1)$~i',$o["field"]))return"<input type='password' value='".h($Y)."'$Ba>";return'';}function
processInput($o,$Y,$q=""){if($q=="now")return"$q()";$K=$Y;if(preg_match('~date|timestamp~',$o["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(30)))).'(.*))',$Y,$A))$K=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$K=($o["type"]=="bit"&&preg_match('~^[0-9]+$~',$Y)?$K:q($K));if($Y==""&&like_bool($o))$K="0";elseif($Y==""&&($o["null"]||!preg_match('~char|text~',$o["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$q))$K="$q($K)";return
unconvert_field($o,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Ue,$I){global$h;$J=$h->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Ue=="table"){dump_csv(array_keys($L));$Ue="INSERT";}dump_csv($L);}}}function
dumpFilename($Ec){return
friendly_url($Ec);}function
dumpHeaders($Ec,$wd=false){$Vb="csv";header("Content-Type: text/csv; charset=utf-8");return$Vb;}function
homepage(){return
true;}function
navigation($vd){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($vd=="auth"){$fc=true;foreach((array)$_SESSION["pwds"]as$Lf=>$Je){foreach($Je[""]as$V=>$H){if($H!==null){if($fc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$fc=false;}echo"<a href='".h(auth_url($Lf,"",$V))."'>".($V!=""?h($V):"<i>".lang(5)."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($vd);if($vd!="db"&&$vd!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".lang(7)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($vd){}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$L){$D=$this->tableName($L);if(isset($L["Engine"])&&$D!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"])." title='".lang(47)."'>$D</a><br>\n";}}function
_foreignColumn($jc,$e){foreach((array)$jc[$e]as$ic){if(count($ic["source"])==1){$D=$this->rowDescription($ic["table"]);if($D!=""){$t=idf_escape($ic["target"][0]);return
array($ic["table"],$t,$D);}}}}function
_foreignKeyOptions($R,$e,$Y=null){global$h;if(list($df,$t,$D)=$this->_foreignColumn(column_foreign_keys($R),$e)){$K=&$this->_values[$df];if($K===null){$S=table_status($df);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $t, $D FROM ".table($df)." ORDER BY 2"));}if(!$K&&$Y!==null)return$h->result("SELECT $D FROM ".table($df)." WHERE $t = ".q($Y));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($lf,$n="",$Pa=array(),$mf=""){global$ba,$ca,$b,$h,$zb,$x;page_headers();$nf=$lf.($mf!=""?": $mf":"");$of=strip_tags($nf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ba,'" dir="',lang(48),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$of,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.2",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.2",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.2",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.2",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(48),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$ca');"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Pa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$zb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(49));if($Pa===false)echo"$O\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Pa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Pa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Pa
as$y=>$X){$qb=(is_array($X)?$X[1]:h($X));if($qb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$qb</a> &raquo; ";}}echo"$lf\n";}}echo"<h2>$nf</h2>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Gf=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$sd=$_SESSION["messages"][$Gf];if($sd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$sd)."</div>\n";unset($_SESSION["messages"][$Gf]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($vd=""){global$b,$qf;echo'</div>

';switch_lang();if($vd!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(50),'" id="logout">
<input type="hidden" name="token" value="',$qf,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($vd);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($C){while($C>=2147483648)$C-=4294967296;while($C<=-2147483649)$C+=4294967296;return(int)$C;}function
long2str($W,$Qf){$_e='';foreach($W
as$X)$_e.=pack('V',$X);if($Qf)return
substr($_e,0,end($W));return$_e;}function
str2long($_e,$Qf){$W=array_values(unpack('V*',str_pad($_e,4*ceil(strlen($_e)/4),"\0")));if($Qf)$W[]=strlen($_e);return$W;}function
xxtea_mx($Wf,$Vf,$Xe,$Sc){return
int32((($Wf>>5&0x7FFFFFF)^$Vf<<2)+(($Vf>>3&0x1FFFFFFF)^$Wf<<4))^int32(($Xe^$Vf)+($Sc^$Wf));}function
encrypt_string($Se,$y){if($Se=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Se,true);$C=count($W)-1;$Wf=$W[$C];$Vf=$W[0];$ie=floor(6+52/($C+1));$Xe=0;while($ie-->0){$Xe=int32($Xe+0x9E3779B9);$Cb=$Xe>>2&3;for($Qd=0;$Qd<$C;$Qd++){$Vf=$W[$Qd+1];$xd=xxtea_mx($Wf,$Vf,$Xe,$y[$Qd&3^$Cb]);$Wf=int32($W[$Qd]+$xd);$W[$Qd]=$Wf;}$Vf=$W[0];$xd=xxtea_mx($Wf,$Vf,$Xe,$y[$Qd&3^$Cb]);$Wf=int32($W[$C]+$xd);$W[$C]=$Wf;}return
long2str($W,false);}function
decrypt_string($Se,$y){if($Se=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Se,false);$C=count($W)-1;$Wf=$W[$C];$Vf=$W[0];$ie=floor(6+52/($C+1));$Xe=int32($ie*0x9E3779B9);while($Xe){$Cb=$Xe>>2&3;for($Qd=$C;$Qd>0;$Qd--){$Wf=$W[$Qd-1];$xd=xxtea_mx($Wf,$Vf,$Xe,$y[$Qd&3^$Cb]);$Vf=int32($W[$Qd]-$xd);$W[$Qd]=$Vf;}$Wf=$W[$C];$xd=xxtea_mx($Wf,$Vf,$Xe,$y[$Qd&3^$Cb]);$Vf=int32($W[0]-$xd);$W[0]=$Vf;$Xe=int32($Xe-0x9E3779B9);}return
long2str($W,true);}$h='';$yc=$_SESSION["token"];if(!$yc)$_SESSION["token"]=rand(1,1e6);$qf=get_token();$Wd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$Wd[$y]=$X;}}$Ca=$_POST["auth"];if($Ca){session_regenerate_id();$yb=$Ca["driver"];$O=$Ca["server"];$V=$Ca["username"];$H=$Ca["password"];$m=$Ca["db"];set_password($yb,$O,$V,$H);$_SESSION["db"][$yb][$O][$V][$m]=true;if($Ca["permanent"]){$y=base64_encode($yb)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($m);$fe=$b->permanentLogin(true);$Wd[$y]="$y:".base64_encode($fe?encrypt_string($H,$fe):"");cookie("adminer_permanent",implode(" ",$Wd));}if(count($_POST)==1||DRIVER!=$yb||SERVER!=$O||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($yb,$O,$V,$m));}elseif($_POST["logout"]){if($yc&&!verify_token()){page_header(lang(50),lang(51));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(52));}}elseif($Wd&&!$_SESSION["pwds"]){session_regenerate_id();$fe=$b->permanentLogin();foreach($Wd
as$y=>$X){list(,$Ta)=explode(":",$X);list($Lf,$O,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($Lf,$O,$V,decrypt_string(base64_decode($Ta),$fe));$_SESSION["db"][$Lf][$O][$V][$m]=true;}}function
unset_permanent(){global$Wd;foreach($Wd
as$y=>$X){list($Lf,$O,$V,$m)=array_map('base64_decode',explode("-",$y));if($Lf==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Wd[$y]);}cookie("adminer_permanent",implode(" ",$Wd));}function
auth_error($Sb=null){global$h,$b,$yc;$Ke=session_name();$n="";if(!$_COOKIE[$Ke]&&$_GET[$Ke]&&ini_bool("session.use_only_cookies"))$n=lang(53);elseif(isset($_GET["username"])){if(($_COOKIE[$Ke]||$_GET[$Ke])&&!$yc)$n=lang(54);else{$H=get_password();if($H!==null){$n=h($Sb?$Sb->getMessage():(is_string($h)?$h:lang(55)));if($H===false)$n.='<br>'.lang(56,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$G=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$G["lifetime"]);page_header(lang(24),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($Lf,$O,$V,$H){$_SESSION["pwds"][$Lf][$O][$V]=($_COOKIE["adminer_key"]?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(57),lang(58,implode(", ",$ae)),false);page_footer("auth");exit;}$h=connect();}if(!is_object($h)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$yb=new
Min_Driver($h);if($Ca&&$_POST["token"])$_POST["token"]=$qf;$n='';if($_POST){if(!verify_token()){$Mc="max_input_vars";$pd=ini_get($Mc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$pd||$X<$pd)){$Mc=$y;$pd=$X;}}}$n=(!$_POST["token"]&&$pd?lang(59,"'$Mc'"):lang(51));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(60,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(61);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$h->select_db($b->database());function
email_header($zc){return"=?UTF-8?B?".base64_encode($zc)."?=";}function
send_mail($Gb,$Ve,$rd,$qc="",$dc=array()){$Nb=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$rd=str_replace("\n",$Nb,wordwrap(str_replace("\r","","$rd\n")));$Oa=uniqid("boundary");$_a="";foreach((array)$dc["error"]as$y=>$X){if(!$X)$_a.="--$Oa$Nb"."Content-Type: ".str_replace("\n","",$dc["type"][$y]).$Nb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$dc["name"][$y])."\"$Nb"."Content-Transfer-Encoding: base64$Nb$Nb".chunk_split(base64_encode(file_get_contents($dc["tmp_name"][$y])),76,$Nb).$Nb;}$Ja="";$_c="Content-Type: text/plain; charset=utf-8$Nb"."Content-Transfer-Encoding: 8bit";if($_a){$_a.="--$Oa--$Nb";$Ja="--$Oa$Nb$_c$Nb$Nb";$_c="Content-Type: multipart/mixed; boundary=\"$Oa\"";}$_c.=$Nb."MIME-Version: 1.0$Nb"."X-Mailer: Adminer Editor".($qc?$Nb."From: ".str_replace("\n","",$qc):"");return
mail($Gb,email_header($Ve),$Ja.$rd.$_a,$_c);}function
like_bool($o){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$o["full_type"]);}$Dd="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$zb[DRIVER]=lang(24);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$h->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$p),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Ff=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$D=>$o){if(!isset($o["privileges"][$Ff?"update":"insert"])||$b->fieldName($o)=="")unset($p[$D]);}if($_POST&&!$n&&!isset($_GET["select"])){$hd=$_POST["referer"];if($_POST["insert"])$hd=($Ff?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$hd))$hd=ME."select=".urlencode($a);$w=indexes($a);$Af=unique_array($_GET["where"],$w);$le="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($hd,lang(62),$yb->delete($a,$le,!$Af));else{$P=array();foreach($p
as$D=>$o){$X=process_input($o);if($X!==false&&$X!==null)$P[idf_escape($D)]=$X;}if($Ff){if(!$P)redirect($hd);queries_redirect($hd,lang(63),$yb->update($a,$P,$le,!$Af));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$J=$yb->insert($a,$P);$cd=($J?last_id():0);queries_redirect($hd,lang(64,($cd?" $cd":"")),$J);}}}$af=$b->tableName(table_status1($a,true));page_header(($Ff?lang(65):lang(40)),$n,array("select"=>array($a,$af)),$af);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($p
as$D=>$o){if(isset($o["privileges"]["select"])){$ya=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$ya="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$ya="1*".idf_escape($D);$N[]=($ya?"$ya AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$yb->select($a,$N,array($Z),$N,array(),(isset($_GET["select"])?2:1),0);$L=$J->fetch_assoc();if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$p){$t=($x=="mongo"?"_id":"itemName()");if(!$Z){$L=$yb->select($a,array("*"),$Z,array("*"),array(),1,0);$L=($L?$L->fetch_assoc():array($t=>""));}if($L){foreach($L
as$y=>$X){if(!$Z)$L[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$t),"auto_increment"=>($y==$t));}}}if($L===false)echo"<p class='error'>".lang(66)."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(67)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$D=>$o){echo"<tr><th>".$b->fieldName($o);$ob=$_GET["set"][bracket_escape($D)];if($ob===null){$ob=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$ob,$qe))$ob=$qe[1];}$Y=($L!==null?($L[$D]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$Ff&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$ob)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$q=($_POST["save"]?(string)$_POST["function"][$D]:($Ff&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($o,$Y,$q);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' value='".h($_POST["field_keys"][0])."'>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array()),$_POST["field_funs"][0])."<td><input name='field_vals[]' value='".h($_POST["field_vals"][0])."'>"."\n";echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".lang(68)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Ff?lang(69)."' onclick='return !ajaxForm(this.form, \"".lang(70).'...", this)':lang(71))."' title='Ctrl+Shift+Enter'>\n";}echo($Ff?"<input type='submit' name='delete' value='".lang(72)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$qf,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$lc=column_foreign_keys($a);$Cd="";if($S["Oid"]){$Cd=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Cd));}parse_str($_COOKIE["adminer_import"],$ra);$ye=array();$f=array();$gf=null;foreach($p
as$y=>$o){$D=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$D!=""){$f[$y]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($o))$gf=$b->selectLengthProcess();}$ye+=$o["privileges"];}list($N,$r)=$b->selectColumnsProcess($f,$w);$Qc=count($r)<count($N);$Z=$b->selectSearchProcess($p,$w);$E=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$qc=($N?implode(", ",$N):"*".($Cd?", $Cd":"")).convert_fields($f,$p,$N)."\nFROM ".table($a);$tc=($r&&$Qc?"\nGROUP BY ".implode(", ",$r):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Bf=>$L){$ya=convert_field($p[key($L)]);$N=array($ya?$ya:idf_escape(key($L)));$Z[]=where_check($Bf,$p);$K=$yb->select($a,$N,$Z,$N,array(),1,0);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$n){$Sf=$Z;if(!$_POST["all"]&&is_array($_POST["check"]))$Sf[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Sf=($Sf?"\nWHERE ".implode(" AND ",$Sf):"");$ce=$Df=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$ce=array_flip($v["columns"]);$Df=($N?$ce:array());break;}}foreach((array)$Df
as$y=>$X){if(in_array(idf_escape($y),$N))unset($Df[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Df===array())$I="SELECT $qc$Sf$tc";else{$_f=array();foreach($_POST["check"]as$X)$_f[]="(SELECT".limit($qc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$tc,1).")";$I=implode(" UNION ALL ",$_f);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$lc)){if($_POST["save"]||$_POST["delete"]){$J=true;$sa=0;$P=array();if(!$_POST["delete"]){foreach($f
as$D=>$X){$X=process_input($p[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Df===array()&&is_array($_POST["check"]))||$Qc){$J=($_POST["delete"]?$yb->delete($a,$Sf):($_POST["clone"]?queries("INSERT $I$Sf"):$yb->update($a,$P,$Sf)));$sa=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Rf="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$J=($_POST["delete"]?$yb->delete($a,$Rf,1):($_POST["clone"]?queries("INSERT".limit1($I,$Rf)):$yb->update($a,$P,$Rf)));if(!$J)break;$sa+=$h->affected_rows;}}}$rd=lang(73,$sa);if($_POST["clone"]&&$J&&$sa==1){$cd=last_id();if($cd)$rd=lang(64," $cd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$rd,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(74);else{$J=true;$sa=0;foreach($_POST["val"]as$Bf=>$L){$P=array();foreach($L
as$y=>$X){$y=bracket_escape($y,1);$P[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$J=$yb->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Bf,$p),!($Qc||$Df===array())," ");if(!$J)break;$sa+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(73,$sa),$J);}}elseif(!is_string($bc=get_file("csv_file",true)))$n=upload_error($bc);elseif(!preg_match('~~u',$bc))$n=lang(75);else{cookie("adminer_import","output=".urlencode($ra["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Za=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$bc,$B);$sa=count($B[0]);$yb->begin();$He=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($B[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$He]*)$He~",$X.$He,$md);if(!$y&&!array_diff($md[1],$Za)){$Za=$md[1];$sa--;}else{$P=array();foreach($md[1]as$s=>$Xa)$P[idf_escape($Za[$s])]=($Xa==""&&$p[$Za[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Xa))));$M[]=$P;}}$J=(!$M||$yb->insertUpdate($a,$M,$ce));if($J)$yb->commit();queries_redirect(remove_from_uri("page"),lang(76,$sa),$J);$yb->rollback();}}}$af=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(36).": $af",$n);$P=null;if(isset($ye["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if(count($lc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$f&&support("table"))echo"<p class='error'>".lang(77).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$f);$b->selectSearchPrint($Z,$f,$w);$b->selectOrderPrint($E,$f,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($gf);$b->selectActionPrint($w);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$oc=$h->result(count_rows($a,$Z,$Qc,$r));$F=floor(max(0,$oc-1)/$z);}$Ee=$N;if(!$Ee){$Ee[]="*";if($Cd)$Ee[]=$Cd;}$gb=convert_fields($f,$p,$N);if($gb)$Ee[]=substr($gb,2);$J=$yb->select($a,$Ee,$Z,$r,$E,$z,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$F)$J->seek($z*$F);$Ib=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$x=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$z&&$r&&$Qc&&$x=="sql")$oc=$h->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".lang(66)."\n";else{$Ia=$b->backwardKeys($a,$af);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$r&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(78)."</a>");$yd=array();$sc=array();reset($N);$ne=1;foreach($M[0]as$y=>$X){if($y!=$Cd){$X=$_GET["columns"][key($N)];$o=$p[$N?($X?$X["col"]:current($N)):$y];$D=($o?$b->fieldName($o,$ne):($X["fun"]?"*":$y));if($D!=""){$ne++;$yd[$y]=$D;$e=idf_escape($y);$Dc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$qb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Dc.($E[0]==$e||$E[0]==$y||(!$E&&$Qc&&$r[0]==$e)?$qb:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($Dc.$qb)."' title='".lang(79)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$sc[$y]=$X["fun"];next($N);}}$fd=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$y=>$X)$fd[$y]=max($fd[$y],min(40,strlen(utf8_decode($X))));}}echo($Ia?"<th>".lang(80):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$lc)as$C=>$L){$Af=unique_array($M[$C],$w);if(!$Af){$Af=array();foreach($M[$C]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Af[$y]=$X;}}$Bf="";foreach($Af
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y="MD5(".(strpos($y,'(')?$y:idf_escape($y)).")";$X=md5($X);}$Bf.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$r&&$N?"":"<td>".checkbox("check[]",substr($Bf,1),in_array(substr($Bf,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Qc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Bf)."'>".lang(81)."</a>"));foreach($L
as$y=>$X){if(isset($yd[$y])){$o=$p[$y];if($X!=""&&(!isset($Ib[$y])||$Ib[$y]!=""))$Ib[$y]=(is_mail($X)?$yd[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$Bf;if(!$_&&$X!==null){foreach((array)$lc[$y]as$kc){if(count($lc[$y])==1||end($kc["source"])==$y){$_="";foreach($kc["source"]as$s=>$Ne)$_.=where_link($s,$kc["target"][$s],$M[$C][$Ne]);$_=($kc["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($kc["db"]),ME):ME).'select='.urlencode($kc["table"]).$_;if(count($kc["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Af))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Af
as$Sc=>$W)$_.=where_link($s++,$Sc,$W);}$X=select_value($X,$_,$o,$gf);$t=h("val[$Bf][".bracket_escape($y)."]");$Y=$_POST["val"][$Bf][bracket_escape($y)];$Eb=!is_array($L[$y])&&is_utf8($X)&&$M[$C][$y]==$L[$y]&&!$sc[$y];$ff=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$Eb)||$Y!==null){$vc=h($Y!==null?$Y:$L[$y]);echo"<td>".($ff?"<textarea name='$t' cols='30' rows='".(substr_count($L[$y],"\n")+1)."'>$vc</textarea>":"<input name='$t' value='$vc' size='$fd[$y]'>");}else{$jd=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($jd?2:($ff?1:0)).($Eb?"":", '".h(lang(82))."'").");\">$X";}}}if($Ia)echo"<td>";$b->backwardKeysPrint($Ia,$M[$C]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$Rb=true;if($_GET["page"]!="last"){if(!+$z)$oc=count($M);elseif($x!="sql"||!$Qc){$oc=($Qc?false:found_rows($S,$Z));if($oc<max(1e4,2*($F+1)*$z))$oc=reset(slow_query(count_rows($a,$Z,$Qc,$r)));else$Rb=false;}}if(+$z&&($oc===false||$oc>$z||$F)){echo"<p class='pages'>";$nd=($oc===false?$F+(count($M)>=$z?2:1):floor(($oc-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(83)."', '".($F+1)."'), event); return false;\">".lang(83)."</a>:",pagination(0,$F).($F>5?" ...":"");for($s=max(1,$F-4);$s<min($nd,$F+5);$s++)echo
pagination($s,$F);if($nd>0){echo($F+5<$nd?" ...":""),($Rb&&$oc!==false?pagination($nd,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$nd'>".lang(84)."</a>");}echo(($oc===false?count($M)+1:$oc-$F*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(85).'...\');">'.lang(86).'</a>':'');}else{echo
lang(83).":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($nd>$F?pagination($F+1,$F).($nd>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($oc!==false?"(".($Rb?"":"~ ").lang(87,$oc).") ":"");$wb=($Rb?"":"~ ").$oc;echo
checkbox("all",1,0,lang(88),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$wb' : checked); selectCount('selected2', this.checked || !checked ? '$wb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(78),'</legend><div>
<input type="submit" value="',lang(68),'"',($_GET["modify"]?'':' title="'.lang(74).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(89),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(65),'">
<input type="submit" name="clone" value="',lang(90),'">
<input type="submit" name="delete" value="',lang(72),'"',confirm(),'>
</div></fieldset>
';}$mc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($mc['sql']);break;}}if($mc){print_fieldset("export",lang(91)." <span id='selected2'></span>");$Pd=$b->dumpOutput();echo($Pd?html_select("output",$Pd,$ra["output"])." ":""),html_select("format",$mc,$ra["format"])," <input type='submit' name='export' value='".lang(91)."'>\n","</div></fieldset>\n";}echo(!$r&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(92),!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ra["format"],1);echo" <input type='submit' name='import' value='".lang(92)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Ib,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$qf'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$h->query("KILL ".(+$_POST["kill"]));elseif(list($R,$t,$D)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$z=11;$J=$h->query("SELECT $t, $D FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$t = $_GET[value] OR ":"")."$D LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $z");for($s=1;($L=$J->fetch_row())&&$s<$z;$s++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($t))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header(lang(49),"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".lang(93).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(31)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(94).'<td>'.lang(95)."</thead>\n";foreach(table_status()as$R=>$L){$D=$b->tableName($L);if(isset($L["Engine"])&&$D!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$D</a>";$X=number_format($L["Rows"],0,'.',lang(8));echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();