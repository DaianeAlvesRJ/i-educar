<?php
#error_reporting(E_ALL);
#ini_set("display_errors", 1);
/**
 * i-Educar - Sistema de gestão escolar
 *
 * Copyright (C) 2006  Prefeitura Municipal de Itajaí
 *                     <ctima@itajai.sc.gov.br>
 *
 * Este programa é software livre; você pode redistribuí-lo e/ou modificá-lo
 * sob os termos da Licença Pública Geral GNU conforme publicada pela Free
 * Software Foundation; tanto a versão 2 da Licença, como (a seu critério)
 * qualquer versão posterior.
 *
 * Este programa é distribuí­do na expectativa de que seja útil, porém, SEM
 * NENHUMA GARANTIA; nem mesmo a garantia implí­cita de COMERCIABILIDADE OU
 * ADEQUAÇÃO A UMA FINALIDADE ESPECÍFICA. Consulte a Licença Pública Geral
 * do GNU para mais detalhes.
 *
 * Você deve ter recebido uma cópia da Licença Pública Geral do GNU junto
 * com este programa; se não, escreva para a Free Software Foundation, Inc., no
 * endereço 59 Temple Street, Suite 330, Boston, MA 02111-1307 USA.
 *
 * @author    Lucas D'Avila <lucasdavila@portabilis.com.br>
 * @category  i-Educar
 * @license   @@license@@
 * @package   Portabilis
 * @since     Arquivo disponível desde a versão 1.1.0
 * @version   $Id$
 */

require_once 'lib/Portabilis/View/Helper/Input/SimpleSearch.php';

/**
 * Portabilis_View_Helper_Input_SimpleSearchMatricula class.
 *
 * @author    Lucas D'Avila <lucasdavila@portabilis.com.br>
 * @category  i-Educar
 * @license   @@license@@
 * @package   Portabilis
 * @since     Classe disponível desde a versão 1.1.0
 * @version   @@package_version@@
 */
class Portabilis_View_Helper_Input_Resource_SimpleSearchMatricula extends Portabilis_View_Helper_Input_SimpleSearch {

  public function simpleSearchMatricula($attrName = '', $options = array()) {
    $defaultOptions = array('objectName'    => 'matricula',
                            'apiController' => 'Matricula',
                            'apiResource'   => 'matricula-search');

    $options        = $this->mergeOptions($options, $defaultOptions);

    parent::simpleSearch($options['objectName'], $attrName, $options);
  }

  protected function inputPlaceholder($inputOptions) {
    return 'Informe o nome do aluno, código ou código da matrícula';
  }

  protected function loadAssets() {
    $jsFile = '/modules/Portabilis/Assets/Javascripts/Frontend/Inputs/Resource/SimpleSearchMatricula.js';
    Portabilis_View_Helper_Application::loadJavascript($this->viewInstance, $jsFile);
  }
}
