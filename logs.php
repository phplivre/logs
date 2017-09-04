function logs($x1) {

// endereço url
$end = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER ['REQUEST_URI'];

// sessão ou cookie do email do usuário
if(empty($_SESSION[usuario])) { $eml = "Deslogado"; } else { $eml = $_SESSION[usuario]; }

// dados de conexão do servidor mysql
$mysqli = new mysqli ("localhost","root","12345678","db");

// query para inserir
$mysqli -> query ("insert into prefixo_logs (log,data,email,ip,pagina) values ('".$x1."','".date('Y-m-d H:i:s')."','".$eml."','".$_SERVER[REMOTE_ADDR]."','".$end."')");
}
