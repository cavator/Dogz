if(localStorage.length!=0){

    document.getElementById("image_label").innerHTML = localStorage.getItem("dogName");
    document.getElementById("image_label").classList.add(localStorage.getItem("font"));
    document.getElementById("image_div").style.backgroundColor = localStorage.getItem("color")
    document.getElementById("image_img").src =  localStorage.getItem('source')??"";

}

function changeFont(){
    let dog_name = document.getElementById("font_select")
    let opts = dog_name.getElementsByTagName("option")

    for(const v in opts){
        //console.log(opts[v],document.getElementById("name_input").value)
        opts[v].innerHTML = document.getElementById("name_input").value
    }
    
}
function changeLabel(){
    let dog_name = document.getElementById("name_input").value;
    document.getElementById("image_label").innerHTML = dog_name;
    localStorage.setItem("dogName",dog_name);
}

function selectFont(){
    let font = document.getElementById("font_select");
    font.setAttribute("selected",true);
    let selected_font = font.options[font.selectedIndex].id;
    let label = document.getElementById("image_label")
    let fonts = ['roboto', 'josefin', 'lobster', 'dancing-script', 'east-sea'];
    fonts.filter(
        (e)=>(label.classList.contains(e)?
        label.classList.remove(e):
        ''
        ))
    
    label.classList.add(selected_font);
    localStorage.setItem("font",selected_font);
}
function selectColor(){
    let rgb = document.getElementById("color_input").value;
    console.log(rgb)
    document.getElementById("image_div").style.backgroundColor = rgb;
    localStorage.setItem("color",rgb);
    
}

function get_img(){
    let dog_name = document.getElementById('race_select');
    dog_name.setAttribute("selected",true);
    console.log(dog_name.options[dog_name.selectedIndex].text)
    fetch('http://localhost:80/php/API/imgExecuter.php',{
        method: 'POST',
        mode: 'cors',
        body:dog_name.options[dog_name.selectedIndex].text

        }).then(response=>response.text())
        .then(data=>{
            document.getElementById("image_img").src = data;
            localStorage.setItem("source",data);

            });
}

function onNameChange(){
    changeFont()
    changeLabel()
}

