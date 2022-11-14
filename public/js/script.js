document.onreadystatechange = () => {
    if (document.readyState === 'complete') {
        setTimeout(elm, 5000);


        function elm() {
            var alert = document.getElementsByClassName('alert')[0];
            alert.remove();
        }
    }
};
