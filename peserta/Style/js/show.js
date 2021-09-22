function Rubah(){
            var x = document.getElementById('password');
            if (x.type === "password"){
              x.type = "text";
            }
            else{
              x.type = "password";
            }
          }

function FormShow(){
            var x = document.getElementById('FoSo');
            var y = document.getElementById('FoSoYear');
            if (x.style.display === "none"){
              x.style.display = "block";
              y.style.display = "none"
            }
            else{
              x.style.display = "none";
            }
          }

function ShowBulan(){
            var x = document.getElementById('FoSoYear');
            var y = document.getElementById('FoSo')
            if (x.style.display === "none"){
              x.style.display = "block";
              y.style.display = "none"
            }
            else{
              x.style.display = "none";
            }
          }

function FormShowDua(){
            var x = document.getElementById('FoSoDua');
            if (x.style.display === "none"){
              x.style.display = "block";
            }
            else{
              x.style.display = "none";
            }
          }