var botmanWidget = {
    title:'Assistant',
    aboutText: 'Ecrivez quelques choses içi',
    placeholderText:'Votre message..',
    mainColor:'#1e4d69',
    headerTextColor: '#fff',
    bubbleBackground:'#34a0a4',
    desktopHeight:380,
    desktopWidth:300,
    introMessage : "Bonjour !"
};

var span = document.getElementById("year");
var year = new Date().getFullYear();
span.innerHTML = year;

function showListButton(){
    var content = document.getElementById("list-content").style;
    
    if(content.display == 'none' || content.display == ''){
        content.display = 'block';     
    }
    
    else{
        content.display = 'none';
    }
}

