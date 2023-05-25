from flask import Flask, request
import os
app = Flask(__name__)

@app.route('/')
def index():
    
    return '你知道flag在哪个route吗？'

@app.route('/flag')
def flag():
    if request.remote_addr == '172.17.0.1':
        return f'The flag is {os.environ.get("FLAG")}'
    else:
        return 'You are not authorized to view the flag.'

if __name__ == '__main__':
    app.run(debug=False, host='0.0.0.0', port=80)