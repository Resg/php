if (document.images) {
	var imagesNormal = new Object();
	imagesNormal['m_salton'] = new Image(112, 17);
	imagesNormal['m_salton'].src = '/i/m_salton.gif';
	imagesNormal['m_gallery'] = new Image(116, 17);
	imagesNormal['m_gallery'].src = '/i/m_gallery.gif';
	imagesNormal['m_direction'] = new Image(174, 17);
	imagesNormal['m_direction'].src = '/i/m_direction.gif';
	imagesNormal['m_advice'] = new Image(179, 17);
	imagesNormal['m_advice'].src = '/i/m_advice.gif';
	imagesNormal['m_function'] = new Image(139, 17);
	imagesNormal['m_function'].src = '/i/m_function.gif';
	imagesNormal['m_expert'] = new Image(103, 17);
	imagesNormal['m_expert'].src = '/i/m_expert.gif';
	imagesNormal['m_question'] = new Image(116, 17);
	imagesNormal['m_question'].src = '/i/m_question.gif';
	imagesNormal['m_load'] = new Image(51, 17);
	imagesNormal['m_load'].src = '/i/m_load.gif';
	
	var imagesHilite = new Object();
	imagesHilite['m_salton'] = new Image(112, 17);
	imagesHilite['m_salton'].src = '/i/m_salton_h.gif';
	imagesHilite['m_gallery'] = new Image(116, 17);
	imagesHilite['m_gallery'].src = '/i/m_gallery_h.gif';
	imagesHilite['m_direction'] = new Image(174, 17);
	imagesHilite['m_direction'].src = '/i/m_direction_h.gif';
	imagesHilite['m_advice'] = new Image(179, 17);
	imagesHilite['m_advice'].src = '/i/m_advice_h.gif';
	imagesHilite['m_function'] = new Image(139, 17);
	imagesHilite['m_function'].src = '/i/m_function_h.gif';
	imagesHilite['m_expert'] = new Image(103, 17);
	imagesHilite['m_expert'].src = '/i/m_expert_h.gif';
	imagesHilite['m_question'] = new Image(116, 17);
	imagesHilite['m_question'].src = '/i/m_question_h.gif';
	imagesHilite['m_load'] = new Image(51, 17);
	imagesHilite['m_load'].src = '/i/m_load_h.gif';
}
function setImage(evt) {
    if (document.images) {
        evt = (evt) ? evt : ((window.event) ? window.event : null);
        if (evt) {
            var elem = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
            if (elem && elem.className == "swappable") {
                switch (evt.type) {
                    case "mouseover" : elem.src = imagesHilite[elem.id].src;
					break;
                    case "mouseout" : elem.src = imagesNormal[elem.id].src;
					break;
                }
            }
        }
    }
}
document.onmouseover = setImage;
document.onmouseout = setImage;


