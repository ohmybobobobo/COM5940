
# A very simple Flask Hello World app for you to get started with...

from flask import Flask, render_template, json, request, redirect, session
from flask import Markup
import requests


app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/")
def main():
   user = {"name":"Bowie"}
   return render_template("index.html",user=user,title="Home Page")


@app.route('/about')
def about():
    r = requests.get('https://api.airtable.com/v0/appSshOqyvPyfmYFh/mydata1?api_key=keyzw1peVZWig6wbC&sortField=_createdTime&sortDirection=desc')
    dict = r.json()
    dataset = []
    for i in dict['records']:
            dict = i['fields']
            del dict["url"]
            dataset.append(dict)
    return render_template('about.html', entries=dataset)

if __name__ == '__main__':
  app.run(debug=True)
