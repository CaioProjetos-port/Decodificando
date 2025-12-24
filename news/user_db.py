import mysql.connector

conexao = mysql.connector.connect(
    host='localhost',
    user='seu_usuario',
    password='sua_senha',
    database='nome_do_banco'
)
cursor = conexao.cursor()




def get_users():
    return [
        {'email': 'user1@example.com', 'preference': 'AI'},
        {'email': 'user2@example.com', 'preference': 'Gadgets'},
    ]
