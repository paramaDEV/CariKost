        $(document).ready(()=>{
            let uang = (nominal)=>{
                let number_string=nominal.toString();
                let sisa =number_string.length % 3;
                let rupiah=number_string.substr(0, sisa);
                let ribuan= number_string.substr(sisa).match(/\d{3}/g);

                if(ribuan){
                    let separator = sisa ? '.':'';
                    rupiah += separator + ribuan.join('.');
                }
                return rupiah;
            }

            let generateContainer = (id,nmkost,jenis,pembayaran,nm_kota_kab,harga,foto)=>{
                let image;
                if (foto!=''){
                    image = `<img src='http://localhost/CariKost/assets/img/kost/${foto}' height=200>`;
                } else {
                    image = `<i class="fas fa-door-open mx-2 mt-4" style="font-size:140px;color:#f0f0f0"></i>`;
                }
                
                let elemen = `
                <a href="detail_kost/${id}">
                <div class="item">
                    <div class="image">
                        <center>${image}</center>
                    </div>
                    <div class="nama">
                    <h3>${nmkost}</h3>
                    </div>
                        <button>${jenis}</button><button>${pembayaran}</button>
                    <div class="contents">
                        <h4><i class="fas fa-map-marker-alt"></i> : ${nm_kota_kab}</h4>
                        <p>Free Listrik, Dapur umum, Kamar mandi luar</p>
                        <h3>Rp ${uang(harga)}</h3>
                    </div>
                </div></a>`;
                $(".container").append(elemen)};
            $("input[name='filterKota']").change(()=>{
                $(".pilihKota").html("Kota / Kabupaten : "+($("input[name='filterKota']:checked").val()));
            });
            $("input[name='filterJenis']").change(()=>{
                $(".pilihJenis").html("Jenis : "+($("input[name='filterJenis']:checked").val()));
            });
            $("input[name='filterPembayaran']").change(()=>{
                $(".pilihPembayaran").html("Pembayaran : "+($("input[name='filterPembayaran']:checked").val()));
            });
            $("#searchBtn").click(function(){
                let filterKota = $("input[name='filterKota']:checked").val();
                let filterJenis = $("input[name='filterJenis']:checked").val();
                let filterPembayaran = $("input[name='filterPembayaran']:checked").val();
                let x =1;

                $.ajax({
                    url : `http://localhost/CariKost/user_controller/data_kost/${$("#searchField").val()}`,
                    type : 'get',
                    dataType : 'json',
                    success : (result)=>{
                        $(".container").html("");
                        if(result==""){
                            $(".container").append(`<h1 style='margin-top:160px'>Not Found</h1>`);
                        }else{
                        $.each(result,function(i,e){
                            if(filterKota=="Semua" && filterJenis=="Semua" && filterPembayaran=="Semua"){
                                generateContainer(e.id,e.nmkost,e.jenis,e.pembayaran,e.nm_kota_kab,e.harga,e.foto);
                                console.log(x++);
                            }else if(filterKota==e.nm_kota_kab && filterJenis==e.jenis && filterPembayaran==e.pembayaran){
                                generateContainer(e.id,e.nmkost,e.jenis,e.pembayaran,e.nm_kota_kab,e.harga,e.foto);
                                console.log(x++);
                            }else if(filterKota=="Semua" && filterJenis==e.jenis && filterPembayaran==e.pembayaran){
                                generateContainer(e.id,e.nmkost,e.jenis,e.pembayaran,e.nm_kota_kab,e.harga,e.foto);
                                console.log(x++);
                            }else if(filterKota==e.nm_kota_kab && filterJenis=="Semua" && filterPembayaran==e.pembayaran){
                                generateContainer(e.id,e.nmkost,e.jenis,e.pembayaran,e.nm_kota_kab,e.harga,e.foto);
                                console.log(x++);
                            }
                            else if(filterKota==e.nm_kota_kab && filterJenis==e.jenis && filterPembayaran=="Semua"){
                                generateContainer(e.id,e.nmkost,e.jenis,e.pembayaran,e.nm_kota_kab,e.harga,e.foto);
                                console.log(x++);
                            }else if(filterKota==e.nm_kota_kab && filterJenis=="Semua" && filterPembayaran=="Semua"){
                                generateContainer(e.id,e.nmkost,e.jenis,e.pembayaran,e.nm_kota_kab,e.harga,e.foto);
                                console.log(x++);
                            }else if(filterKota=="Semua" && filterJenis==e.jenis && filterPembayaran=="Semua"){
                                generateContainer(e.id,e.nmkost,e.jenis,e.pembayaran,e.nm_kota_kab,e.harga,e.foto);
                                console.log(x++);
                            }else if(filterKota=="Semua" && filterJenis=="Semua" && filterPembayaran==e.pembayaran){
                                generateContainer(e.id,e.nmkost,e.jenis,e.pembayaran,e.nm_kota_kab,e.harga,e.foto);
                                console.log(x++);
                            }
                        });
                        }
                    }
                });
            console.log(filterKota);
            console.log(filterJenis);
            console.log(filterPembayaran);
            });
        });