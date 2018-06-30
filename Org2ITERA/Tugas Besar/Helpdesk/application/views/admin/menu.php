<aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    
					<li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
							<li class="bold"><a href="<?=base_url();?>index.php/login/index1" class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
							</li>
							</ul>
                    </li>   
                    <?php
                    $tanggal = date("D/m/y");
                     $tampil2=mysqli_query($koneksi, "select * from tiket where tanggal='$tanggal' and status='open'");
                        $total2=mysqli_num_rows($tampil2);
                        ?>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a href="<?=base_url();?>index.php/login/tiket" class="collapsible-header waves-effect waves-cyan"><i class="mdi-communication-email"></i> Tiket <span class="new badge"><?php echo $total2; ?></span></a>
                                
                            </li>
                        </ul>
                    </li>   
                    <
                </ul>
                
            </aside>