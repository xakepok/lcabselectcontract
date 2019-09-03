<?php
defined('_JEXEC') or die;
?>
<form action="/index.php?option=com_projects&task=profile.setUserContract" method="post" name="contract">
    <select name="contractID" onchange="document.forms[0].submit();" class="w-100">
        <option value="0"><?php echo JText::sprintf('MOD_LCABSELECTCONTRACT_SELECT_CONTRACT');?></option>
    <?php foreach ($contracts as $contract) :
        $title = ProjectsHelper::getContractTitle($contract['status'] ?? 0, $contract['number'] ?? 0, $contract['dat'] ?? '');
        ?>
        <option value="<?php echo $contract['id'];?>" <?php if ($active === (int) $contract['id']) echo 'selected';?>><?php echo $title;?></option>
    <?php endforeach;?>
    </select>
    <input type="hidden" name="return" value="<?php echo $return;?>">
</form>

