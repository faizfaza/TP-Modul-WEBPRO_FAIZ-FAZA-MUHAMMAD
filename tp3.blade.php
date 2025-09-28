<!DOCTYPE html>
<head>
    <title>Profil Diri</title>
</head>
<body>
    <div>
        <h1>Profil Pribadi</h1>
            <table border="0" cellpadding="8">
                <tr>
                    <th>Foto Profil</th>
                    <th>Video Perkenalan</th>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('foto_profil.png') }}" alt="Foto Profil" width="200">
                    </td>
                    <td>
                        <video controls width="300">
                            <source src="{{ asset('img_0980.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                </tr>
            </table>
        <h2>Tentang Saya</h2>
        <p>Nama saya Faiz, mahasiswa S1 Teknologi Informasi di Telkom University.</p>
        <h2>Keterampilan</h2>
            <table border="0" cellpadding="3">
                <tr>
                    <th><b>Keterampilan<b></th>
                    <th><b>Tingkat<b></th>
                </tr>
                <tr>
                    <td>HTML/CSS</td>
                    <td>Mahir</td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>Menengah</td>
                </tr>
                <tr>
                    <td>Python</td>
                    <td>Pemula</td>
                </tr>
            </table>
        <h2>Hubungi Saya</h2>
        <form action="#" method="post">
            @csrf
            <label>Nama:
                <input type="text" name="nama">
            </label><br>
            <label>Email:
                <input type="text" name="email">
            </label><br>
            <label>Pesan:</label><br>
            <textarea name="pesan" rows="5" cols="25"></textarea><br>
            <button type="submit">Kirim Pesan</button>
</form>
<h3>Media Sosial:</h3>
    <a href="https://www.linkedin.com" target="_blank">LinkedIn</a> |
    <a href="https://github.com" target="_blank">GitHub</a> |
    <a href="https://twitter.com" target="_blank">Twitter</a>
</body>
</html