var alb = document.querySelectorAll('.alb');

alb.forEach(function(btn) {
    btn.addEventListener('click' , function () {
        let albumName = this.querySelector('.albumname').textContent;
        let songscount = this.querySelector('.albumname').getAttribute('data-key');
        let artistName = this.querySelector('.artistname').textContent;
        let albumImageSrc = this.querySelector('img').getAttribute('src');
        let albumid = this.getAttribute('data-key');


        // console.log('Album Name:', albumName);
        //         console.log('Artist Name:', artistName);
        //         console.log('Album Image Source:', albumImageSrc);
        //         console.log(albumid);

        document.querySelector('#exampleModalLabel').textContent = albumName;
        let modalContent = document.querySelector('.modal-content');
        document.querySelector('.artistmodal').setAttribute('src',albumImageSrc);
        modalContent.style.backgroundImage = `url('${albumImageSrc}')`;
        document.querySelector('#artistName').textContent = artistName + ' . ' + songscount + ' Songs';

        let xml = new XMLHttpRequest();

        xml.onreadystatechange = function () {
            if(this.status==200) {
                document.querySelector('.tbody').innerHTML = this.responseText;
            }
        }

        xml.open('POST' , 'MusicController/getmusicforalbum');
        xml.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xml.send("albumid="+albumid);
    })
})