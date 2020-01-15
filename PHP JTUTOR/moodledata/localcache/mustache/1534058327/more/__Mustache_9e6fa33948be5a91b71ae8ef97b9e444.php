<?php

class __Mustache_9e6fa33948be5a91b71ae8ef97b9e444 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="progressbar_container" style="width: ';
        $value = $this->resolveValue($context->find('width'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= 'px;" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <h2 id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_status"></h2>
';
        $buffer .= $indent . '    <div class="progress progress-striped active">
';
        $buffer .= $indent . '        <div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_bar" class="bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">&nbsp;</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <p id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_estimate"></p>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '(function() {
';
        $buffer .= $indent . '    var el = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\'),
';
        $buffer .= $indent . '        progressBar = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_bar\'),
';
        $buffer .= $indent . '        statusIndicator = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_status\'),
';
        $buffer .= $indent . '        estimateIndicator = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_estimate\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    el.addEventListener(\'update\', function(e) {
';
        $buffer .= $indent . '        var msg = e.detail.message,
';
        $buffer .= $indent . '            percent = e.detail.percent,
';
        $buffer .= $indent . '            estimate = e.detail.estimate;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        statusIndicator.textContent = msg;
';
        $buffer .= $indent . '        progressBar.textContent = \'\' + percent + \'%\';
';
        $buffer .= $indent . '        if (percent === 100) {
';
        $buffer .= $indent . '            el.classList.add(\'progress-success\');
';
        $buffer .= $indent . '            estimateIndicator.textContent = \'\';
';
        $buffer .= $indent . '        } else {
';
        $buffer .= $indent . '            if (estimate) {
';
        $buffer .= $indent . '                estimateIndicator.textContent = estimate;
';
        $buffer .= $indent . '            } else {
';
        $buffer .= $indent . '                estimateIndicator.textContent = \'\';
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '            el.classList.remove(\'progress-success\');
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        progressBar.setAttribute(\'aria-valuenow\', percent);
';
        $buffer .= $indent . '        progressBar.setAttribute(\'style\', \'width: \' + percent + \'%\');
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '})();
';
        $buffer .= $indent . '</script>
';

        return $buffer;
    }
}
