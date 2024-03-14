function popupfunction(x)
{
    document.getElementById('popup'+x).style.display='block';
    document.getElementById('fade'+x).style.display='block';
}



function popupclose(x)
{
    document.getElementById('popup'+x).style.display='none';
    document.getElementById('fade'+x).style.display='none';
}

function showcart()
{
    document.getElementById('cart').style.display='block';
}

var currentItem ="";

function addItem(item)
{
    currentItem += '<br>'+ item;
    document.getElementById('addedItem').innerHTML =currentItem;
}

function createItem()
{
    var listedItem = document.getElementById('productsLabel');
    listedItem.innerHTML += currentItem;
    currentItem="";
    addItem();
}
