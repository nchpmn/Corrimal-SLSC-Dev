		<!-- Footer -->
			<footer id="footer">
				<div class="container">
                    <h2>Our Sponsors</h2>
                    <div class="row">
                        <?php foreach($site->sponsors()->toStructure() as $item): ?>
                        <div class="2u 3u(medium) 4u(small)">
                            <div class="image fit captioned">
                                <?php if($item->link()!=""): ?>
                                    <a href="<?= $item->link() ?>">
                                    <?= $item->logo()->toFile()->resize(140); ?>
                                    <h3><?= $item->name() ?></h3>
                                    </a>
                                <?php else: ?>
                                    <?= $item->logo()->toFile()->resize(200); ?>
                                    <h3><?= $item->name() ?></h3>
                                <?php endif ?>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                    
					<ul class="copyright">
						<li>&copy; Corrimal Surf Life Saving Club</li>
                        <li>Design: <a href="http://nchp.mn">Nathan Chapman</a></li>
                        <li>Made with <a href="http://getkirby.com">Kirby</a> and &hearts;</li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
        <?php echo js(array(
            'assets/js/jquery.min.js',
            'assets/js/skel.min.js',
            'assets/js/util.js',
            'assets/js/main.js',
        )) ?>

	</body>
</html>