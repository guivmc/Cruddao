/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function habilitaBtn() {
    if(document.getElementById('ok').checked===true) {
        document.getElementById('btn').style.visibility='visible';
    } else {
        document.getElementById('btn').style.visibility='hidden';
    }
}

function verificaSenha() {
    var s1 = document.getElementById('txtsenha').value;
    var s2 = document.getElementById('txtsenhatmp').value;
    
    if(s1.localeCompare(s2)===0) {
        document.getElementById('btn').style.visibility='visible';
    } else {
        document.getElementById('btn').style.visibility='hidden';
        alert('As senhas devem ser iguais');
    }
}