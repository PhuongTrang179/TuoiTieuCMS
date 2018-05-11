function UploadImage(image, callback) {
    const ref = firebase.storage().ref();
    // document.querySelector('#file-anh').files[0];
    const file = image;
    const name = (+new Date()) + '-' + file.name;
    const metadata = {
        contentType: file.type
    };
    const task = ref.child(name).put(file, metadata);
    task.then((snapshot) => {
        const url = snapshot.downloadURL;
        callback(url);
    }).catch((error) => {
        console.log(error);
        });
}