<div class="aside">
    <div class="sidebar">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-"></ion-icon>
                        </span>
                        <span class="title">Insan Permata</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Client</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Kehadiran</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="file-outline"></ion-icon>
                        </span>
                        <span class="title">Billing</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="dollar-outline"></ion-icon>
                        </span>
                        <span class="title">Biodata Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        {{-- <div class="profil">
            <img src="{{ asset('storage/images/logobaru.png') }}" width="100" style="border-radius: 50%; object-fit: cover;" height="80" alt="">
        </div>
        <div class="text">
            <ul>
                <li><a href="{{route('admin_dashboard.index')}}">Dashboard</a></li>
                <li><a href="{{route('admin_klien.index')}}">Klien</a></li>
                <li><a href="{{route('admin_form.index')}}">Form</a></li>
                <li><a href="#">Kehadiran</a></li>
                <li><a href="#">Riwayat Kehadiran</a></li>
                <li><a href="#">Billing</a></li>
            </ul>
        </div>
        <div class="logout">
            <button class="tombol">
                <img src="{{ asset('storage/admin-asset/Logout.png') }}" width="33" height="23" alt="Deskripsi Gambar">
                <span>Logout</span>
            </button>
        </div> --}}
    </div>
</div>

<style>

        .aside {
            width: 20%;
            height: 100dvh;
        }

        .sidebar {
            height: 100%;
            width: 100%;
            /* background-color: #2192FF; */
        }

        .sidebar ul {
            list-style-type: none;
            padding-top: 35px;
            padding-left: 30px;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: black;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .profil {
            padding-top: 50px;
            width: 50%;
            margin: auto;
            background-size: cover;
        }

        .tombol {
            display: flex;
            justify-content: space-between;
            padding: 4px;
            margin-left: 55px;
            border-color:  #333;
            border-radius: 5px;
            background-color:  #2192FF;
        }

        /* =============== Navigation ================ */
.navigation {
position: fixed;
width: 300px;
height: 100%;
background: var(--blue);
border-left: 10px solid var(--blue);
transition: 0.5s;
overflow: hidden;
}
.navigation.active {
width: 80px;
}

.navigation ul {
position: absolute;
top: 0;
left: 0;
width: 100%;
}

.navigation ul li {
position: relative;
width: 100%;
list-style: none;
border-top-left-radius: 30px;
border-bottom-left-radius: 30px;
}

.navigation ul li:hover,
.navigation ul li.hovered {
background-color: var(--white);
}

.navigation ul li:nth-child(1) {
margin-bottom: 40px;
pointer-events: none;
}

.navigation ul li a {
position: relative;
display: block;
width: 100%;
display: flex;
text-decoration: none;
color: var(--white);
}
.navigation ul li:hover a,
.navigation ul li.hovered a {
color: var(--blue);
}

.navigation ul li a .icon {
position: relative;
display: block;
min-width: 60px;
height: 60px;
line-height: 75px;
text-align: center;
}
.navigation ul li a .icon ion-icon {
font-size: 1.75rem;
}

.navigation ul li a .title {
position: relative;
display: block;
padding: 0 10px;
height: 60px;
line-height: 60px;
text-align: start;
white-space: nowrap;
}

/* --------- curve outside ---------- */
.navigation ul li:hover a::before,
.navigation ul li.hovered a::before {
content: "";
position: absolute;
right: 0;
top: -50px;
width: 50px;
height: 50px;
background-color: transparent;
border-radius: 50%;
box-shadow: 35px 35px 0 10px var(--white);
pointer-events: none;
}
.navigation ul li:hover a::after,
.navigation ul li.hovered a::after {
content: "";
position: absolute;
right: 0;
bottom: -50px;
width: 50px;
height: 50px;
background-color: transparent;
border-radius: 50%;
box-shadow: 35px -35px 0 10px var(--white);
pointer-events: none;
}



</style>

