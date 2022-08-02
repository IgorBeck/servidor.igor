import json
from flask import Flask, jsonify, request

app = Flask(_name_)

livros = [
    {
        'nomeAutor':'a',
        'sobrenome':'a',
        'titulo':'a',
        'editora':'a',
        'cidade':'a',
        'ano':'a',
        'isbn':'1',
        'assuntos':'a'
    },
    {
        'nomeAutor':'b',
        'sobrenome':'b',
        'titulo':'b',
        'editora':'b',
        'cidade':'b',
        'ano':'b',
        'isbn':'2',
        'assuntos':'b'
    }
]


@app.route('/livros', methods=['GET'])
def home():
    return jsonify(livros), 200

@app.route('/livros/<string:isbn>', methods=['GET'])
def livros_per_isbn(isbn):
    devs_per_isbn = [livros for livros in livros if livros['isbn'] == isbn]
    return jsonify(devs_per_isbn), 200

@app.route('/livro', methods=['POST'])
def save_livros():
        data = request.get_json()
        livros.append(data)
        return jsonify(data), 201


if _name=='main_':
    app.run(debug=True)
