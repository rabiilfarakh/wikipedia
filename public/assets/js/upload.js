const dropZoneElement = document.querySelector('.drop-zone');
const fileInput = document.getElementById('myFileInput');

dropZoneElement.addEventListener('click',e=> {
    fileInput.click();
})

fileInput.addEventListener('change',e=> {
    if(fileInput.files.length) {
        updateThumbnail(dropZoneElement,fileInput.files[0]);
    }
})

dropZoneElement.addEventListener('dragover', e => {
    e.preventDefault();
    dropZoneElement.classList.add('drag-over');
});

dropZoneElement.addEventListener('dragleave', e => {
    e.preventDefault();
    dropZoneElement.classList.remove('drag-over');
});

dropZoneElement.addEventListener('drop', e => {
    e.preventDefault();
    
    
    
    if(e.dataTransfer.files.length) {
        fileInput.files = e.dataTransfer.files;
        updateThumbnail(dropZoneElement,fileInput.files[0]);
    }

    dropZoneElement.classList.remove('drag-over');
});

function updateThumbnail (dropZoneElement,file) {
    let thumbnail = dropZoneElement.querySelector('.drop-zone__thumb');

    if(dropZoneElement.querySelector('.drop-zone__prompt')){
        dropZoneElement.querySelector('.drop-zone__prompt').remove();
    }
    //if thumbnail doesnt exist create it 
    if(!thumbnail) {
        thumbnail = document.createElement('div');
        thumbnail.classList.add('drop-zone__thumb');
        dropZoneElement.appendChild(thumbnail);
    }

        if(file.type.startsWith("image/")){
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnail.style.backgroundImage = `url('${reader.result}')`;
            };
        }
        else {
            thumbnail.style.backgroundImage = null;
        }
}


const albuminput = document.querySelector('.albumname');
const albumttext = document.querySelector('.top-right-text');

albuminput.addEventListener('input' , (e) => {
    albumttext.textContent = albuminput.value;
});




const table = document.querySelector('.tablebody');
const songnameinput = document.querySelector('.songnameinput');
const songnamesend = document.querySelector('.songnameadd');
let i = 1;

let songlist = [];


document.querySelector('.styles').addEventListener('change', function() {
    var selectedValue = this.value;
});

songnamesend.addEventListener('click', () => {
    let inputvalue = songnameinput.value; 
    let selectedstyle = document.querySelector('.styles').value;
    let selectedStyleElement = document.querySelector('.styles');
    let selectedStyleText = selectedStyleElement.options[selectedStyleElement.selectedIndex].textContent;
    if (inputvalue !== '') {
        let songData = {
            songName: inputvalue,
            style: selectedstyle
        };
        songlist.push(songData);
        let newRow = document.createElement('tr');
        newRow.innerHTML = `
            <th scope="row">${i}</th>
            <td>${inputvalue}</td>
            <td>${selectedStyleText}</td>
        `;

        table.appendChild(newRow); 
        i++;
        songnameinput.value = ''; 
    }
});



var sendlastthing = document.querySelector('.btn-last');

sendlastthing.addEventListener('click', () => {
    let albumname = albumttext.textContent = albuminput.value;
    let artistname = document.querySelector('.artistname').value;
    let imageData = fileInput.files[0]; 

    let formData = new FormData();
    formData.append('artist', artistname);
    formData.append('album', albumname);
    formData.append('image', imageData); 

    for (let i = 0; i < songlist.length; i++) {
        formData.append('songs[' + i + '][songName]', songlist[i].songName);
        formData.append('songs[' + i + '][style]', songlist[i].style);
    }

    let xml = new XMLHttpRequest();

    if(imageData != '' && albumname !='') {
        xml.onreadystatechange = function () {
            if (xml.readyState === XMLHttpRequest.DONE) {
                if (xml.status === 200) {
                    console.log('Data sent successfully:', xml.responseText);
                    // albuminput.value = '';
                    // artistname.value = '';
                    // fileInput.value = '';
                    // songlist = []; 
                    
    
                    // albumttext.textContent = '';
                    location.reload();
                } else {
                    console.error('Error:', xml.statusText);
                }
            }
        };

        xml.open('POST', 'Upload/addmusic', true);
    xml.send(formData); 
    }
    else {
        console.log('INSERT VALUES');
    }

    
});





