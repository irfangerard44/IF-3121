<aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    
					<li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
							<li class="bold"><a href="index.php" class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
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
                            <li class="bold"><a href="index.php" class="collapsible-header waves-effect waves-cyan"><i class="mdi-communication-email"></i> Tiket <span class="new badge"><?php echo $total2; ?></span></a>
                                
                            </li>
                        </ul>
                    </li>   
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-person"></i> Admin </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="admin.php">Data Admin</a>
                                        </li>                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>   
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>