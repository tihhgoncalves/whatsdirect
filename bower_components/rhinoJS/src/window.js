/** Evento que � disparado quando o site � carregado ou a janela muda de tamanho
 *
 * @param fnc
 */
window.change = function(fnc){
  jQuery(document).ready(fnc);
  jQuery(window).resize(fnc);
}
