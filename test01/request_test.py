# coding=utf-8
import request

def test():
    url = ""
    data = ""
    # payload = ''
    r = request.post(url,data=data)
    result = r.json()
    print (result)