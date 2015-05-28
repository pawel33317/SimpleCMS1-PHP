        <footer id="bottom">
			{section name=id loop=$footerlnk.tytul}
			<a href="{$footerlnk.link[id]}">{$footerlnk.tytul[id]}</a>{if not $smarty.section.id.last} | {/if}
			{/section}
			<br>
			{$footer}<br>Stronę odwiedzono <strong>{$licznikglowny}</strong> razy.
        </footer>
    </body>
</html>