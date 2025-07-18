<!DOCTYPE html>
<html>
<head>
    <title>Data Kamar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');
        body {
            background: linear-gradient(120deg, #F5E9DA 60%, #A8D5BA 100%);
            font-family: 'Nunito', Arial, sans-serif;
            color: #4F6F52;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            transition: background 0.3s;
        }
        .container {
            max-width: 800px;
            margin: 48px auto;
            background: #fff;
            border-radius: 32px;
            box-shadow: 0 8px 32px #BFA18122;
            padding: 40px 32px 32px 32px;
            position: relative;
        }
        .header-flex {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 24px;
        }
        .logo {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            box-shadow: 0 2px 8px #A8D5BA33;
        }
        h1 {
            color: #4F6F52;
            font-size: 1.6rem;
            font-weight: 800;
            margin-bottom: 0;
            letter-spacing: 1px;
        }
        .dark-toggle {
            position: absolute;
            top: 24px;
            right: 32px;
            background: #F5E9DA;
            color: #4F6F52;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            box-shadow: 0 2px 8px #A8D5BA33;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
            gap: 12px;
        }
        .search-bar {
            border: 1.5px solid #A8D5BA;
            border-radius: 16px;
            padding: 8px 16px;
            font-size: 1rem;
            background: #FFF8F0;
            font-family: 'Nunito', Arial, sans-serif;
            width: 220px;
            transition: border 0.2s;
        }
        .search-bar:focus {
            border-color: #4F6F52;
            outline: none;
        }
        .btn-tambah {
            background: linear-gradient(90deg, #A8D5BA 70%, #BFA181 100%);
            color: #fff;
            border: none;
            border-radius: 22px;
            padding: 12px 28px;
            font-size: 1.08rem;
            font-weight: 700;
            box-shadow: 0 2px 8px #A8D5BA22;
            cursor: pointer;
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .btn-tambah:hover {
            background: linear-gradient(90deg, #BFA181 70%, #A8D5BA 100%);
            color: #FFF8F0;
            transform: scale(1.06) translateY(-2px);
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: #F5E9DA;
            border-radius: 18px;
            box-shadow: 0 2px 8px #A8D5BA11;
            overflow: hidden;
            margin-bottom: 18px;
            animation: fadeInUp 0.7s;
        }
        th, td {
            padding: 12px 16px;
            text-align: left;
        }
        th {
            background: #A8D5BA;
            color: #fff;
            font-weight: 700;
            font-size: 1.01rem;
        }
        tr:nth-child(even) { background: #fff; }
        tr:nth-child(odd) { background: #F5E9DA; }
        tr:hover { background: #F0F7F4; transition: background 0.2s; }
        .aksi {
            display: flex;
            gap: 10px;
        }
        .aksi-btn {
            background: #A8D5BA;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
        }
        .aksi-btn:hover {
            background: #BFA181;
            transform: scale(1.13);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 700px) {
            .container { padding: 12px 2vw; }
            h1 { font-size: 1.1rem; }
            .top-bar { flex-direction: column; gap: 8px; }
            .search-bar { width: 100%; }
        }
        body.dark-mode {
            background: linear-gradient(120deg, #23272f 60%, #3a4d3f 100%) !important;
            color: #e6e6e6 !important;
        }
        body.dark-mode .container { background: #23272f !important; color: #e6e6e6 !important; }
        body.dark-mode table, body.dark-mode th, body.dark-mode td { background: #2d323b !important; color: #FFD700 !important; }
        body.dark-mode th { background: #388e3c !important; color: #fff !important; }
        body.dark-mode .btn-tambah, body.dark-mode .aksi-btn, body.dark-mode .dark-toggle { background: #388e3c !important; color: #fff !important; }
        body.dark-mode .btn-tambah:hover, body.dark-mode .aksi-btn:hover { background: #FFD700 !important; color: #23272f !important; }
        body.dark-mode .dark-toggle { background: #23272f !important; color: #FFD700 !important; }
    </style>
</head>
<body>
    <div class="container">
        <button class="dark-toggle" id="darkModeToggle" title="Dark Mode"><span id="darkModeIcon">🌙</span></button>
        <div class="header-flex">
            <img src="https://img.icons8.com/color/96/000000/bedroom.png" alt="Logo Kamar" class="logo">
            <h1>Data Kamar</h1>
        </div>
        <div class="top-bar">
            <input type="text" id="searchInput" class="search-bar" placeholder="Cari kamar..." onkeyup="searchTable()">
            <a href="/kamar/create" class="btn-tambah">+ Tambah Kamar</a>
        </div>
        <table id="kamarTable">
            <tr>
                <th>Nomor</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($kamar as $k): ?>
            <tr>
                <td><?= esc($k['nomor']) ?></td>
                <td><?= esc($k['harga']) ?></td>
                <td class="aksi">
                    <a href="/kamar/edit/<?= $k['id'] ?>" class="aksi-btn" title="Edit">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 1 1 3 3L7 19.5 3 21l1.5-4L16.5 3.5z"/></svg>
                    </a>
                    <a href="/kamar/delete/<?= $k['id'] ?>" class="aksi-btn" title="Hapus" onclick="return confirm('Yakin hapus?')">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <script>
    // Dark Mode Toggle
    const darkBtn = document.getElementById('darkModeToggle');
    const darkIcon = document.getElementById('darkModeIcon');
    function setDarkMode(on) {
        document.body.classList.toggle('dark-mode', on);
        darkIcon.textContent = on ? '☀️' : '🌙';
        localStorage.setItem('darkMode', on ? '1' : '0');
    }
    darkBtn.onclick = () => setDarkMode(!document.body.classList.contains('dark-mode'));
    if(localStorage.getItem('darkMode') === '1') setDarkMode(true);
    // Search Table
    function searchTable() {
        var input = document.getElementById('searchInput');
        var filter = input.value.toLowerCase();
        var table = document.getElementById('kamarTable');
        var tr = table.getElementsByTagName('tr');
        for (var i = 1; i < tr.length; i++) {
            var td = tr[i].getElementsByTagName('td')[0];
            if (td) {
                var txtValue = td.textContent || td.innerText;
                tr[i].style.display = txtValue.toLowerCase().indexOf(filter) > -1 ? '' : 'none';
            }
        }
    }
    </script>
</body>
</html>
