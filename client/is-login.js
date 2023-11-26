$(document).ready(function () {
    const authToken = localStorage.getItem('auth_token');

    if (!authToken) {
        window.location.href = './login.html';
    }

    if (authToken) {
        document.getElementById('logout-btn').style.display = 'block';
        document.getElementById('profile-menu').style.display = 'block';
        document.getElementById('login-btn').style.display = 'none';
    } else {
        document.getElementById('logout-btn').style.display = 'none';
        document.getElementById('profile-menu').style.display = 'none';
    }

    $('#logout-btn').on('click', function () {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/logout',
            type: 'POST',
            headers: {
                Authorization: `Bearer ${authToken}`,
            },
            success: function (response) {
                localStorage.removeItem('auth_token');

                window.location.href = './login.html';
            },
        });
    });
});
