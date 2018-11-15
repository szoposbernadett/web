var a =1;
function a(){}
function b()
{
    a=10;
    return ;
}
b();
console.log('a='+a);

for(var i=0; i<5; i++)
{
    (function (i){
    setTimeout(function(){console.log(i++);}, i*1000);
})(i);}


try{
    setTimeout(function()
    {
        throw new Error('example')
    },1000)
}catch(err)
{
alert ("won't work")
}

setTimeout(()=>console.log('Blocked'),1000);
function blocking()
{
    let a=0;
    for (let i=0; i<1000; i++)
    {
        for(let j=0; j<i*10000; j++)
        {
            if(i<j)
            {
                a++;
            }
        }
    }
}
blocking();

class Animal{
    constructor(color)
    {
        var _type=type;
        var _color=color;
    }
    getColor()
    {
        return '${this._color}';
    }
}

class Fish extends Animal{
    constructor (fishType)
    {
        var _fishType=fishType;
        getFishType();
        this.getFishType=function(){return _fishType;}
    }
}

class Dog extends Animal{
    constructor(dogType)
    {
        var _dogType=dogType;
        getDogType();
        this.getDogType=function(){return _dogType}
    }
}

class dogType extends Dog{
    constructor(furColor, typeName){
    var _typeName=typeName;
    var _furColor=furColor;
    }
    getFurColor()
    {
        console.log('black');
        return '${this._furColor}'; 
    }
}





var type;
function Animal1(color)
{
	this.color = color;
	this.type = type;
}
	function getColor()
	{
    return this.color;
	}
var animal = new Animal1('black');
animal.color;
animal.type;


function Fish(fishType)
{
	this.fishType = fishType;
}
function getFishType()
	{
    return this.fishType;
	}

Fish.prototype = new Animal();
var f = new Fish1();
console.log(f.color);


function Dog(dogType)
{
	this.dogType = dogType;
	
}
	function getFurColor()
	{
    return this.dogType;
	}

function DogType(furColor)
{
	this.typeName = typeName;
	this.furColor = furColor;
}
	function getFurColor()
	{
    return this.furColor;
}