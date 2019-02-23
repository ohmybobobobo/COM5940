
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

@app.route("/blog")
def blog():
    r = requests.get('https://api.airtable.com/v0/appEL20vPQnJvnXSv/action?api_key=keyzw1peVZWig6wbC&sortField=_createdTime&sortDirection=desc')
    dict3 = r.json()
    dataset4 = []
    for i in dict3['records']:
            dict3 = i['fields']
            del dict3["level"]
            del dict3["membership_level"]
            del dict3["user_name"]
            del dict3["levels2"]
            del dict3["ref2"]
            dataset4.append(dict3)
    return render_template('blog.html', entries=dataset4)

@app.route("/chart")
def chart():
    r = requests.get('https://api.airtable.com/v0/appEL20vPQnJvnXSv/points?api_key=keyzw1peVZWig6wbC&sortField=_createdTime&sortDirection=desc')
    dict1 = r.json()
    dict2 = {}
    dataset2 = []
    name_list = []
    points = []
    for i in dict1['records']:
         dict2 = i['fields']
         dataset2.append(dict2)
    for item in dataset2:
        name_list.append(item.get('user'))
        points.append(item.get('totalpoints'))
    return render_template('blog-single.html', entries = zip(name_list, points))

@app.route("/chart2")
def chart2():
    r = requests.get('https://api.airtable.com/v0/appEL20vPQnJvnXSv/actions?api_key=keyzw1peVZWig6wbC&sortField=_createdTime&sortDirection=desc')
    dict5 = r.json()
    dict6 = {}
    dataset3 = []
    action = []
    num = []
    for i in dict5['records']:
         dict6 = i['fields']
         dataset3.append(dict6)
    for item in dataset3:
        action.append(item.get('action'))
        num.append(item.get('number'))
    return render_template('blog-single2.html', entries = zip(action, num))

if __name__ == '__main__':
  app.run(debug=True)
