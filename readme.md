#MageProfis_Usps

adds a system config that provides the ability to 
easily add and remove usps.

###Usage:

layout files
<pre>
<block type="usps/usps" name="your.name" template="your.template" />
</pre>

templates
<pre>
foreach($this->getUsps() as $usp) 
{
    echo $usp ....
}
</pre>
