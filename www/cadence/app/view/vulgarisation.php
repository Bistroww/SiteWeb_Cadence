@import url('https://fonts.googleapis.com/css2?family=Alata&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Alata&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    scroll-behavior: smooth;
    background-color: white;
    color: var(--text-color);
    font-family: "Inter";
}

:root {
    --text-color: #020202;
    --main-color: #F39322;
}

html {
    overflow-x: hidden;
}


p .contenue{
    background-color:rgba(255, 255, 255, 0.5) ;
}

.introduction{
    margin-top: 5%;
    display: grid;
    grid-template-columns: 0.7fr 2fr;
    grid-template-rows: min-content;
    align-items: center;
}

#titre {
    grid-column: 1;
    text-align: center;
}

#texteintro {
    grid-column: 2/4;
    grid-row: 1;
}


 .contenue {
   border: 10%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr ;
    height: 100%;
    margin-top: 10%;
    margin-left: 10%;
    margin-right: 10%;
    grid-gap: 6%;
    align-items: center;
}



#videoconcassage{
    grid-row:2;
    grid-column:1;
}

.Texte1 .Texte2 .Texte3 .Texte4 .Texte5 {
    text-align: center;
}