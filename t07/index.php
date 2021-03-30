<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SERVER</title>
</head>

<body>
    <p><?php echo "A name of file of the executed script: ".$_SERVER["SCRIPT_FILENAME"];?></p>
    <p><?php echo "Arguments passed to the script: "; if(count($_SERVER["argv"]) == 1) echo $argv[0]; else { foreach($_SERVER["argv"] as $arg) echo $arg.';';}?></p>
    <p><?php echo "IP address of the server: ".$_SERVER["SERVER_ADDR"];?></p>
    <p><?php echo "A name of host that invoke current script: ".$_SERVER["SERVER_NAME"];?></p>
    <p><?php echo "A name and a version of the information protocol: ".$_SERVER["SERVER_PROTOCOL"];?></p>
    <p><?php echo "A query method: ".$_SERVER["QUERY_STRING"];?></p>
    <p><?php echo "User-Agent information: ".$_SERVER["HTTP_USER_AGENT"];?></p>
    <p><?php echo "IP address of the client: ".$_SERVER["REMOTE_ADDR"];?></p>
    <p><?php echo "A list of parameters passed by URL: ".$_SERVER["PATH_INFO"];?></p>
</body>

</html>
