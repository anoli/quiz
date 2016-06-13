<ul>
<hr/>
{foreach from=$data item=foo}
	{foreach from=$foo key=k item=foo2}
	     <li>{$k} : {$foo2}</li>
	{/foreach}
	<hr/>
{/foreach}
</ul>