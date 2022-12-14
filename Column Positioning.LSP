(defun c:colpos (/)
  (setvar "cmdecho" 0)
  (setq restoreosmode (getvar "osmode"))
  (setq wall (entsel "Select a wall line"))
  (setq entlist (entget (car wall)))
  (repeat (setq i (length entlist))
    (if (= (car (nth i entlist)) 0)
      (setq enttype (cdr (nth i entlist)))
      )
    (if (= (car (nth i entlist)) 8)
      (setq layername (cdr (nth i entlist)))
      )
    (setq i (1- i))
    )
  (setq sp (list))
  (setq ep (list))
  (setq ss (ssget "_X" (list (cons 0 enttype) (cons 8 layername))))
  (repeat (setq in (sslength ss))
    (vla-highlight
      (vlax-ename->vla-object (ssname ss (setq in (1- in))))
      :vlax-true
    )
    (setq ent (entget (ssname ss in)))
    (setq sp (append (list (cdr (assoc 10 ent))) sp))
    (setq ep (append (list (cdr (assoc 11 ent))) ep)) 
  )
  )
  