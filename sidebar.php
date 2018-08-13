
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">RUP</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
              <li class="mdl-menu__item">Rekapitulasi Pengadaan</li>
              <li class="mdl-menu__item">Rekapitulasi Pengadaan per OPD</li>
              <li class="mdl-menu__item">Efisiensi Lelang</li>
              <li class="mdl-menu__item">Lelang yang Dilaksanakan</li>
              <li class="mdl-menu__item">Lelang Ulang</li>
              <li class="mdl-menu__item">Pemenang Berdasarkan Lokasi</li>
              <li class="mdl-menu__item">Pemenang Nilai</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--light-blue-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>Laporan Pengadaan Melalui LPSE <br> Kabupaten Purbalingga</span>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="?page=rekapitulasi"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Rekapitulasi Pengadaan</a>
          <a class="mdl-navigation__link" href="?page=rekapitulasi_per_opd"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Rekapitulasi Pengadaan per OPD</a>
          <a class="mdl-navigation__link" href="?page=efisiensi_lelang"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Efisiensi Lelang</a>
          <a class="mdl-navigation__link" href="?page=lelang_dilaksanakan"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Lelang yang Dilaksanakan</a>
          <a class="mdl-navigation__link" href="?page=lelang_ulang"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Lelang Ulang</a>
          <a class="mdl-navigation__link" href="?page=pemenang"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Pemenang Berdasarkan Lokasi</a>
        </nav>
      </div>