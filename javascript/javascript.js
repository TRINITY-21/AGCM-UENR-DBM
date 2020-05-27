 
 alert("ture");
 
 function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

    if(!document.getElementById("mySidenav").style){
      alert("ture");
    }
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    
  }




  function RopenNav() {
    document.getElementById("RmySidenav").style.width = "300px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";      
  }
  
  function RcloseNav() {
    document.getElementById("RmySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    
  }