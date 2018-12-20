const app=require('express')();
const path=require('path');
const PORT=process.env.PORT=4000;
const mustache=require('mustache-express');

app.engine('html', mustache());
app.set('view engine', 'html');