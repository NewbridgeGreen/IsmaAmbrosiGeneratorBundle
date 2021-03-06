
    /**
     * Creates a new {{ document }} document.
     *
{% if 'annotation' == format %}
     * @Route("/create", name="{{ route_name_prefix }}_create")
     * @Method("post")
     * @Template("{{ bundle }}:{{ controller_namespace ? controller_namespace|replace({"\\": "/"}) ~ '/' : '' }}{{ document }}:new.html.twig")
     *
     * @return array
{% else %}
     * @return \Symfony\Component\HttpFoundation\Response
{% endif %}
     */
    public function createAction()
    {
        $document  = new {{ document_class }}();
        $request = $this->getRequest();
        $form    = $this->createForm(new {{ document_class }}Type(), $document);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $dm = $this->getDocumentManager();
            $dm->persist($document);
            $dm->flush();

{% if 'show' in actions %}
            return $this->redirect($this->generateUrl('{{ route_name_prefix }}_show', array('id' => $document->getId())));
{% else %}
            return $this->redirect($this->generateUrl('{{ route_name_prefix }}'));
{% endif %}
        }

{% if 'annotation' == format %}
        return array(
            'document' => $document,
            'form'     => $form->createView()
        );
{% else %}
        return $this->render('{{ bundle }}:{{ document|replace({'\\': '/'}) }}:new.html.twig', array(
            'document' => $document,
            'form'     => $form->createView()
        ));
{% endif %}
    }
