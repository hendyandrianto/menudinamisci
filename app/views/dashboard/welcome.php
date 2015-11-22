<script type="text/javascript">
    function kaping(id){
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('Januari', 'Pebruari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
        h = date.getHours();
        if(h<10){
            h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10){
            m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10){
            s = "0"+s;
        }
        result = ''+days[day]+', '+d+'-'+months[month]+'-'+year+'';
        document.getElementById(id).innerHTML = result;
        setTimeout('kaping("'+id+'");','1000');
        return true;
    }
    function waktos(id){
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('Januari', 'Pebruari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
        h = date.getHours();
        if(h<10){
            h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10){
            m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10){
            s = "0"+s;
        }
        result = ' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('waktos("'+id+'");','1000');
        return true;
    }
</script>
<div class="row">
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-green">
            <div class="stats-icon"><i class="fa fa-user"></i></div>
			<div class="stats-info">
				<h4>User Online</h4>
				<p>2 Orang</p>	
			</div>
            <div class="stats-desc">User Online Hari Ini : 2 Orang</div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-purple">
            <div class="stats-icon"><i class="fa fa-envelope-o"></i></div>
            <div class="stats-info">
                <h4>Pesan</h4>
                <p>20 Pesan</p> 
            </div>
            <div class="stats-desc">Total Pesan : 20 Pesan</div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-blue">
            <div class="stats-icon"><i class="fa fa-users"></i></div>
			<div class="stats-info">
				<h4>Data Pegawai</h4>
				<p>20 Orang</p>	
			</div>
            <div class="stats-desc">Total Data Pegawai : 20 Orang</div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-red">
            <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
			<div class="stats-info">
				<h4>Waktu</h4>
				<p><span id="waktos"><script type="text/javascript">window.onload = waktos('waktos');</script></span></p>	
			</div>
            <div class="stats-desc"><span id="kaping"><script type="text/javascript">window.onload = kaping('kaping');</script></span></div>
        </div>
    </div>
</div>
