<h2>
                            MAKLUMAT BAYARAN <small>Maklumat yuran anak yang perlu dijelaskan dan juga maklumat pembayaran yang telah dilaksanakan. Yuran hanya dipaparkan bagi anak yang telah berstatus PROSES atau TERIMA sahaja.</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">mic</i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                                <p class="blue">Yuran hendaklah dijelaskan pada setiap bulan berkenaan <strong class="red">selewat-lewatnya 3 hb</strong> setiap bulan.</p>

                                <form method="post" enctype="multipart/form-data" name="frmCendekiawan">
                               
                              
                                <p>
                                </p>
                                <table width="600" border="0" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td width="183" height="25">Jumlah Bayaran <strong>
                                    <input name="hid_bayaran" type="hidden" id="hid_bayaran" />
                                    </strong></td>
                                    <td>RM  
                                    <input type="text" name="jum_bayaran" id="jum_bayaran" value="" disabled /></td>
                                </tr>
                                <tr>
                                    <td height="25">Kaedah Pembayaran <span class="red">*</span></td>
                                    <td><select name="sel_kaedah_bayaran" id="sel_kaedah_bayaran">
                                        <option value="">PILIH</option>
                                        <option value='1' >On-line Banking</option><option value='2' >Cash Deposit Machine</option><option value='3' >Cheque Deposit Machine</option><option value='4' >Pindahan Wang Dari Mesin Bank</option><option value='5' >Bayaran Melalui Kaunter Bank</option><option value='7' >Cek</option>      </select></td>
                                </tr>
                                <tr>
                                    <td height="25">Akaun Bank <span class="red">*</span></td>
                                    <td><select name="sel_bank" id="sel_bank">
                                    <option value="">Pilih</option>
                                    <option value='17' >MALAYAN BANKING BERHAD  (5660201000030)</option><option value='22' >RHB BANK BERHAD (26670008001)</option>    </select></td>
                                </tr>
                                <tr>
                                    <td height="25">Maklumat Rujukan <span class="red">*<br />
                                        <small><em>Sila masukkan No.rujukan, masa, no cek dll</em></small></span></td>
                                    <td><textarea name="no_rujukan" cols="30" rows="3" id="no_rujukan"></textarea></td>
                                </tr>
                                <tr>
                                    <td height="25">Tarikh Pembayaran <span class="red">*</span></td>
                                    <td width="397"><input name="tarikh_pembayaran" type="text" class="tarikh_pembayaran" id="tarikh_pembayaran" value="05-11-2017" size="10" maxlength="10" readonly />
                                    (hh-bb-tttt) </td>
                                </tr>
                                <tr>
                                    <td height="25">Bukti Bayaran  <span class="red">*</span><br />
                                    <small><em class="red">Format .jpg, PDF, .doc &amp; .docx sahaja &amp; saiz kurang dari 2 MB. Pastikan nama lampiran tidak mempunyai simbol seperti : ' *  / &lt; &gt;. </em></small></td>
                                    <td><input name="salinan_resit1" type="file" id="salinan_resit1" /><br />
                                    <input name="salinan_resit2" type="file" id="salinan_resit2" /><br />
                                    <input name="salinan_resit3" type="file" id="salinan_resit3" /></td>
                                </tr>
                                <tr>
                                    <td height="25">Perakuan <span class="red">*</span></td>
                                    <td><label class="blue"><input name="perakuan" type="checkbox" id="perakuan" value="1" />
                                    Saya mengaku maklumat pembayaran yang saya masukkan di atas adalah benar dan tepat</label></td>
                                </tr>
                                <tr>
                                    <td height="25">(<span class="red">*</span> Ruangan perlu di isi)</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                    <button type="submit" name="btnSimpan" id="btnSimpan" onClick="return Validate()"><img src="images/next.png" width="16" height="16" border="0" align="absmiddle"  /> Simpan & Teruskan</button>    </td>
                                </tr>
                                </table>
                                </form>
                                <script type="text/javascript">
                                function Validate(){
                                    if(window.document.getElementById('jum_bayaran').value == '' || window.document.getElementById('jum_bayaran').value == '0.00'){
                                        alert("Sila PILIH/TANDAKAN yuran hendak dibayar!");
                                        return false;
                                    }
                                    else if(window.document.getElementById('sel_kaedah_bayaran').value == ''){
                                        alert("Sila pilih kaedah pembayaran anda!");
                                        window.document.getElementById('sel_kaedah_bayaran').focus();
                                        return false;
                                    }
                                    else if(window.document.getElementById('sel_bank').value == ''){
                                        alert("Sila pilih akaun bank!");
                                        window.document.getElementById('sel_bank').focus();
                                        return false;
                                    }
                                    else if(window.document.getElementById('no_rujukan').value == ''){
                                        alert("Sila masukkan maklumat rujukan pembayaran anda!");
                                        window.document.getElementById('no_rujukan').focus();
                                        return false;
                                    }
                                    else if(window.document.getElementById('tarikh_pembayaran').value == ''){
                                        alert("Sila masukkan tarikh pembayaran anda!");
                                        window.document.getElementById('tarikh_pembayaran').focus();
                                        return false;
                                    }
                                    else if(window.document.getElementById('salinan_resit1').value == '' && window.document.getElementById('salinan_resit2').value == '' && window.document.getElementById('salinan_resit3').value == ''){
                                        alert("Sila masukkan bukti bayaran anda!");
                                        return false;
                                    }
                                    else if(window.document.getElementById('perakuan').checked != true){
                                        alert("Sila tandakan perakuan anda!");
                                        window.document.getElementById('perakuan').focus();
                                        return false;
                                    }
                                    else
                                        return true;
                                }


                                $(function () {

                                    $('.tbayar').keyup(function () {
                                    
                                        updateTotal();

                                    });

                                    $('.cbayar').click(function() {
                                    
                                        updateTotal();

                                    });

                                    function updateTotal() {
                                        // initialize the sum (total price) to zero
                                        var sum = 0;
                                        var jumlah_bayaran = 0;
                                        
                                        // we use jQuery each() to loop through all the textbox with 'price' class
                                        // and compute the sum for each loop
                                        $('.tbayar').each(function() {
                                            
                                            if(!isNaN($(this).val())){
                                                sum += Number($(this).val());
                                            }else
                                                alert("Hanya masukkan nombor sahaja. Pastikan anda tidak memasukkan tanda ',' atau RM ");
                                        });

                                        $('.cbayar').each(function() {
                                            
                                            if ($(this).is(":checked")){
                                                sum += Number($(this).val());
                                            }
                                        });
                                        
                                        // set the computed value to 'totalPrice' textbox
                                        $('#jum_bayaran').val(sum.toFixed(2));
                                    
                                    }
                                });

                                </script></td>
                                    <td>&nbsp;</td>
                                </tr>
                                </table>