# picpay
Copia do app do Picpay com Ionic e PHP.

# STACK
PHP 5.3 CodeIgniter 3 (Usei essa versão pela velocidade e desempenho).
MariaDB
Ionic e Bootstrap 4 (Front)

# COMO INSTALAR 
Lembre de configurar o URL no Config.php 

    $config['base_url'] = 'http://localhost /'; (com a barra no final se não buga).

Depois carregar o banco de dados é atualizar as conexões no arquivo database.php

    'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'picpay',

Pronto você já pode acessar pela URL configurada.

# DEMO URL: http://ec2-18-216-69-35.us-east-2.compute.amazonaws.com/

Fiz esse codigo em 4 horas para apresentar ao pessoal do Picpay como forma de avalição tecnica, qualquer mal uso não serei responsavel. 
